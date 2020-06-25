# CheckoutSelectInput
Change/Modify Input 'Text' Attribute to 'Select' on Magento 2 Checkout

How to use:
1. Goto Plugin/CheckoutProcessor.php
2. Update Shipping attribute/label
3. Update 'options' array in 'afterProcess' method

For required entry, add: 'validation' => ['required-entry' => true]
