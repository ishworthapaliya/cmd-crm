<?php
require 'db.php';
require 'lib/Slim/Slim.php';
require 'functions.php';


\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


$app->get('/companies','getCompanies');

$app->post('/companies',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);

    createCompany($params);
    
});

$app->put('/companies/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
    
    updateCompany($id, $params);
    
});


$app->delete('/companies/:id',function($id) {
    deleteCompany($id);
});


$app->get('/company-statuses','getCompanyStatuses');

$app->post('/company-statuses',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
   
    createCompanyStatus($params);
    
});

$app->put('/company-statuses/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
   
    updateCompanyStatus($id, $status);
    
});


$app->delete('/company-statuses/:id',function($id) {
    deleteCompanyStatus($id);
});





$app->get('/company-domains','getCompanyDomains');

$app->post('/company-domains',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
   
    createCompanyDomain($params);
    
});

$app->put('/company-domains/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
   
    updateCompanyDomain($id, $params);
    
});

$app->delete('/company-domains/:id',function($id) {
    deleteCompanyDomain($id);
});




$app->get('/contacts','getContacts');

$app->post('/contacts',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
    
    createContact($params);
    
});

$app->put('/contacts/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
    
    updateContact($id, $params);
    
});

$app->delete('/contacts/:id',function($id) {
    deleteContact($id);
});



$app->get('/activities','getActivities');

$app->post('/activities',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
    
    createActivity($params);
    
});


$app->put('/activities/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);

    updateActivity($id, $params);
    
});

$app->delete('/activities/:id',function($id) {
    deleteActivity($id);
});




$app->get('/activity-statuses','getActivityStatuses');

$app->post('/activity-statuses',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
   
    createActivityStatus($params);
    
});

$app->put('/activity-statuses/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);

    updateActivityStatus($id, $params);
    
});

$app->delete('/activity-statuses/:id',function($id) {
    deleteActivityStatus($id);
});


$app->get('/users/','getUsers');


$app->get('/users/:id', function($id) use ($app) {

    getUserById($id);

});


$app->post('/users',function() use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
    
    createUser($params);
    
});

$app->put('/users/:id',function($id) use ($app) {
    
    $request = $app->request->getBody();
    
    $params = json_decode($request);
    
    //var_dump($params);
    
    updateUser($id, $params);
    
});

$app->delete('/users/:id',function($id) {
    deleteUser($id);
});



$app->run();