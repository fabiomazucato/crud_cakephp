<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Profiles Controller
 *
 * @property \App\Model\Table\ProfilesTable $Profiles
 *
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilesController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $profiles = $this->paginate($this->Profiles);

        $this->set(compact('profiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profile = $this->Profiles->get($id, [
            'contain' => [
                'Permissions' => [
                    'Menus'
                ]
            ]
        ]);

        //dump($profile);die;

        $this->set('profile', $profile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profile = $this->Profiles->newEntity();
        
        if ($this->request->is('post')) {

            $this->requestDataMerging();
            $profile = $this->Profiles->patchEntity($profile, $this->request->data);

            //$profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            if ($this->Profiles->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile could not be saved. Please, try again.'));
        }

        $this->loadModel('Menus');
        $menuGroup = $this->Menus->find('menuActionGroups', ['profile_id' => PROFILE_ID]);

        $this->set(compact('profile', 'menuGroup'));
        $this->set('_serialize', ['profile']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profile = $this->Profiles->get($id, [
            'contain' => [
                'Permissions'
            ]
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $this->requestDataMerging();

            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            $this->Profiles->Permissions->deleteAll(['Permissions.profile_id' => $id]);

            if ($this->Profiles->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile could not be saved. Please, try again.'));
        }

        /*
        $profile_id = null;
        if ($this->request->session()->read('User.profile_id') != 1)
            $profile_id = PROFILE_ID;

            ['profile_id' => $profile_id]
        */

        $this->loadModel('Menus');
        $menuGroup = $this->Menus->find('menuActionGroups', ['profile_id' => PROFILE_ID]);

        $menuActionsIds = null;
        if (!empty($profile->permissions)) :
            $this->loadModel('MenuActions');
            $menuActionsIds = $this->MenuActions->find('menuActionIdsProfileId', ['profile_id' => $id]);
        endif;

        $this->set(compact('profile', 'menuActionsIds', 'menuGroup'));
        $this->set('_serialize', ['profile']);

    }

    /**
     * Delete method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profile = $this->Profiles->get($id);
        if ($this->Profiles->delete($profile)) {
            $this->Flash->success(__('The profile has been deleted.'));
        } else {
            $this->Flash->error(__('The profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Merging permissions to request data
     */
    private function requestDataMerging() {

        if (!empty($this->request->data['permissions']['_ids'])) {
            $this->loadModel('MenuActions');
            $menuActionPermissions = $this->MenuActions->find('menuActionPermissions', [$this->request->data['permissions']]);

            $this->request->data = \Cake\Utility\Hash::remove($this->request->data, 'permissions');
            $this->request->data = \Cake\Utility\Hash::merge($this->request->data, $menuActionPermissions);
        }
    }


}
