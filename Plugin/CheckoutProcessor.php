<?php
namespace Jawwad\CheckoutSelectInput\Plugin;

use Magento\Checkout\Model\Session;

class CheckoutProcessor
{    

    /**
     * @var Session
     */
    private $checkoutSession;

    /**
     * CheckoutProcessor constructor.
     *     
     * @param Session $checkoutSession
     */
    public function __construct(
        Session $checkoutSession
    ) {
        $this->checkoutSession = $checkoutSession;
    }

    /**
     * Checkout LayoutProcessor after process plugin.
     *
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $processor
     * @param array $jsLayout
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterProcess(\Magento\Checkout\Block\Checkout\LayoutProcessor $processor, $jsLayout)
    {
        
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
          ['shippingAddress']['children']['shipping-address-fieldset']['children']['city'] = [
              'component' => 'Magento_Ui/js/form/element/select',
              'config' => [
                  'customScope' => 'shippingAddress',
                  'template' => 'ui/form/field',
                  'elementTmpl' => 'ui/form/element/select',
              ],
              'dataScope' => 'shippingAddress.city',
              'label' => 'City',
              'provider' => 'checkoutProvider',
              'visible' => true,
              'validation' => [],
              'sortOrder' => 80,
              'id' => 'city',
              'options' => [
                  [
                      'value' => '',
                      'label' => 'Choose a city',
                  ],
                  [
                      'value' => 'city1',
                      'label' => 'City 1',
                  ],
                  [
                      'value' => 'city2',
                      'label' => 'City 2',
                  ],
                  [
                      'value' => 'city2',
                      'label' => 'City 2',
                  ]
              ]
          ];

        return $jsLayout;
    }
}