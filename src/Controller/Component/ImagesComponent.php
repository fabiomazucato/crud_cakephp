<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Images component
 */
class ImagesComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    private $controller;
    private $imagesTable;

    public function initialize(array $config) {
        parent::initialize($config);
        $this->controller = $this->_registry->getController();
        $this->controller->loadComponent('PostFileCurl');
        $this->imagesTable = \Cake\ORM\TableRegistry::get('Images');
    }

    /**
     * Add images
     * @param array $image = [
      'img' => $this->request->data['img'],
      'registry' => $packageOffline->id,
      'menu_id' => $this->menu->id,
      'site_area_id' => null,
      'thumb_width' => 250,
      'thumb_heigth' => 125,
      'priority' => null,
      'mime_type' => false,
      ];
     */
    public function add(array $image) {


        $img = [
            'image' => $image['image'],
            'registry' => $image['registry'],
            'menu_id' => $image['menu_id'],
            'site_area_id' => (isset($image['site_area_id']) ? $image['site_area_id'] : null),
            'thumb_width' => (isset($image['thumb_width']) ? $image['thumb_width'] : null),
            'thumb_heigth' => (isset($image['thumb_heigth']) ? $image['thumb_heigth'] : null),
            'priority' => (isset($image['priority']) ? $image['priority'] : null),
            'mime_type' => (isset($image['mime_type']) ? $image['mime_type'] : null),
        ];

        $options = [
            'post_data' => null,
            'system' => 'erp_foco',
            'path' => 'images/' . $this->request->param('controller') . '/cliente_' . PERSON_ID . '/',
            'path_img_larger' => 'images/' . $this->request->param('controller') . '/cliente_' . PERSON_ID . '/',
            'path_img_thumb' => 'images/' . $this->request->param('controller') . '/cliente_' . PERSON_ID . '/thumbs/',
            'thumb_width' => $img['thumb_width'],
            'thumb_heigth' => $img['thumb_heigth'],
        ];

        $result = $this->controller->PostFileCurl->setPostFileCURL($img['image'], $options);

        $priority = 1;
        if (!is_null($result)) {
            foreach ($result->file as $key => $file) {

                $priority = (!empty($img['priority']) ? $img['priority'] : $priority++);
                $images[] = [
                    'menu_id' => (int) $img['menu_id'],
                    'url' => null,
                    'priority' => (int) $priority,
                    'person_id' => (int) PERSON_ID,
                    'registry' => (int) $img['registry'],
                    'larger' => $file->img_larger,
                    'thumb' => $file->img_thumb,
                    'site_area_id' => $img['site_area_id'],
                ];

                if (!empty($mime_type))
                    $img['mime_type'] = $mime_type;
            }

            $images = $this->imagesTable->newEntities($images);
            $this->imagesTable->saveMany($images);
        }
    }

    public function edit(array $images) {
        $image_id = (new \Cake\Collection\Collection($images))->extract('id')->filter()->toArray();
        $imagesEntities = $this->imagesTable->find('all')->where(function($exp) use ($image_id){
            return $exp->in('id', $image_id);
        });
        
        $images = $this->imagesTable->patchEntities($imagesEntities->toArray(), $images);
        $this->imagesTable->saveMany($images);
    }

    /**
     * 
     * @param type $menu_id
     * @param type $registry
     * @param array $site_area_id
     * @param type $mime_type
     * @param type $priority
     * @return type
     */
    public function findAll($menu_id, $registry, array $site_area_id = null, $mime_type = null, $priority = null) {
        $images = $this->imagesTable->find('all')
                ->where(function($exp) use (&$menu_id, &$registry, &$site_area_id, &$mime_type, &$priority) {
            $exp->eq('menu_id', $menu_id);
            $exp->in('registry', $registry);

            if (!empty($site_area_id)) {
                $exp->in('site_area_id', $site_area_id);
            }
            if (!empty($mime_type)) {
                $exp->eq('mime_type', $mime_type);
            }
            if (!empty($priority)) {
                $exp->eq('priority', $priority);
            }

            return $exp;
        });

        return $images->toArray();
    }

    /**
     * 
     * @param type $menu_id
     * @param type $registry
     * @param array $site_area_id
     * @param type $mime_type
     * @param type $priority
     * @return type
     */
    public function findFirst($menu_id, $registry, array $site_area_id = null, $mime_type = null, $priority = null) {
        $images = $this->imagesTable->find('all')->where(['menu_id' => $menu_id, 'registry' => $registry])
                ->where(function($exp) use (&$menu_id, &$registry, &$site_area_id, &$mime_type) {
            $exp->eq('menu_id', $menu_id);
            $exp->in('registry', $registry);

            if (!empty($site_area_id)) {
                $exp->in('site_area_id', $site_area_id);
            }
            if (!empty($mime_type)) {
                $exp->eq('mime_type', $mime_type);
            }

            return $exp;
        });

        return $images->first();
    }

    public function findById($image_id) {
        $images = $this->imagesTable->find('all')
                ->where(function($exp) use (&$image_id) {
            $exp->in('id', $image_id);

            return $exp;
        });

        return $images->toArray();
    }

    /**
     * Delete images by id
     * @param array $images
     */
    public function delete(array $images) {

        $images = (new \Cake\Collection\Collection($images))->extract('id')->toArray();

//        $hasImage = $this->findById($images);

        $this->imagesTable->deleteAll([
            'id IN' => $images
        ]);
    }

}
