# magento_training
training for magento certification

ex1:
Rewrite the sales/order model to add the customer group model as an email template variable in the sendNewOrderEmail() method,
so the group code can be added to the email using {{var customer_group.getCode()}}.

ex2:
Create an observer that redirects the visitor to the base URL if the CMS home page URL key is accessed directly (i.e. /home -> /).

ex3:
Add a new frontend route and create an index controller and an index action that set the return value of $this->getFullActionName() to the response body.

ex4:
Rewrite the Mage_Customer_AccountController::loginAction() method to set a category view of your choice as the before_auth_url.
