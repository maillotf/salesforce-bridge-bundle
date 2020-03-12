# Salesforce-bridge-bundle

Symfony bundle for Salesforce REST client which is base on username,password authentication

## Required configuration

### Modify framework.yaml
```yaml
salesforce:
    authentication:
        endpoint: "https://login.salesforce.com/"
        client_id: "CLIENT_ID"
        client_secret: "CLIENT_SECRET"
        username: "USERNAME"
        password: "PASSWORD"
        security_token: 'SECURITY_TOKEN'
    rest:
        version: "v35.0"
        endpoint: "https://YOURINSTANCE.salesforce.com"
```

### Modify services.yaml
```yaml
services:
    MaillotF\Salesforce\SalesforceBridgeBundle\Service\SalesforceService: '@salesforce.service'
```

##Package instalation with composer

```console
$ composer require maillotf/salesforce-bridge-bundle
```

## Use in controller:

```php
<?php
//...
use MaillotF\Salesforce\SalesforceBridgeBundle\Service\SalesforceService;

class exampleController extends AbstractController
{
	/**
	 * Example
	 * 
	 * @Route("example", name="example", methods={"GET"})
	 * 
	 */
	public function test(SalesforceService $SalesforceService)
	{
		//Update record
		$response = $SalesforceService->getBySobjectId('Contact', '0035J000001fqm1QAA');
		if ($response->isSuccess() === true)
			return ($this->json('OK'));
		return ($this->json('Not Found', Response::HTTP_BAD_REQUEST));
	}

}
```
