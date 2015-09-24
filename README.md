# MagentoStorePickup
Magento extension that allows customers to pick up their order at a retail store location

Instructions for installing this extension in 10 easy do-it-yourself steps.
1. Clone this repo (DUH!)  
2. Copy it’s contents to the root of your Magento installation. You can use FTP to do that. It’s the directory containing index.php [App] [Skin] [Media] among others  
3. Log in to your Magento backend.  
4. Go to “System -> Cache Management”, select all options, and in the action dropdown select “Refresh”. Then click the [Submit] button.  
5. Log out/in to your backend.  
6. Go to “System -> Configuration -> Shipping methods” and expand the “Payment on pickup” section. Change the method name, price and title to something that suits your need and set “Enabled” to “Yes”.  
7. Click the [Save Config] button.  
8. Go to “System -> Configuration -> Payment methods” and expand the “Pay on pickup” section. Change the title to something that suits your needs. Then drop down the “Pickup method” dropdown and select “[payonpickup] The title you chose in step 6.” (be aware that this drop down is scrollable and may contain a lot of options). You can also use this to make this payment method available for other shipping methods.  
9. Click the [Save Config] button.  
10. All done!   
   
More info: http://www.rapidcommerce.eu/en/blog/2012/07/magento-store-pickup/  
Questions: https://www.facebook.com/RapidCommerce
