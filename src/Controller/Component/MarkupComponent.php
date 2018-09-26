<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Markup component
 */
class MarkupComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * 
     * @param \App\Model\Entity\AmbienceSale $AmbienceSale
     * @param type $price
     * @return type
     */
    public function applyMarkup(\App\Model\Entity\AmbienceSale $AmbienceSale, $price) {
        $markup = (object) null;
        $old_price = $price;
        if (empty($AmbienceSale->ambience_sale_channels) && !empty($AmbienceSale->ambience_sale_marckups)) {
            $ambienceSaleMarckups = $AmbienceSale->ambience_sale_marckups[0];


            if ($ambienceSaleMarckups->type_markup == '%') {
                $price += ($price * $ambienceSaleMarckups->markup / 100);
            } elseif ($ambienceSaleMarckups->type_markup == '$') {
                $price += $ambienceSaleMarckups->markup;
            }

            if ($ambienceSaleMarckups->type_commission == '%') {
                $commission = ($price * $ambienceSaleMarckups->commission / 100);
            } elseif ($ambienceSaleMarckups->type_commission == '$') {
                $commission = $ambienceSaleMarckups->commission;
            }

            $markup->type = 'ambience_sale_marckups';
            $markup->type_markup = $ambienceSaleMarckups->type_markup;
            $markup->markup = $ambienceSaleMarckups->markup;
            $markup->type_commission = $ambienceSaleMarckups->type_commission;
            $markup->commission = $ambienceSaleMarckups->commission;
            $markup->price =  $price;
            $markup->old_price =  $old_price;
            
        } elseif (!empty($AmbienceSale->ambience_sale_channels[0]->channel)) {
            $channels = $AmbienceSale->ambience_sale_channels[0]->channel;

            $channels->markup = null;

            $channels->type_markup = (empty($channels->type_markup) ? $channels->group_channel->type_markup : $channels->type_markup);
            $channels->markup      = (empty($channels->markup) ? $channels->group_channel->markup : $channels->markup);
            $channels->type_commission = (empty($channels->type_commission) ? $channels->group_channel->type_commission : $channels->type_commission);
            $channels->commission      = (empty($channels->commission) ? $channels->group_channel->commission : $channels->commission);

            if ($channels->type_markup == '%') {
                $price += ($price * $channels->markup / 100);
            } elseif ($channels->type_markup == '$') {
                $price += $channels->markup;
            }

            if ($channels->type_commission == '%') {
                $commission = ($price * $channels->commission / 100);
            } elseif ($channels->type_commission == '$') {
                $commission = $channels->commission;
            }

            $markup->type = 'channel';
            $markup->type_markup = $channels->type_markup;
            $markup->markup = $channels->markup;
            $markup->type_commission = $channels->type_commission;
            $markup->commission = $channels->commission;
            $markup->price =  $price;
            $markup->old_price =  $old_price;
        }
        
        return $markup;
    }

}
