<?php

/** @var \Directus\Application\Application $app */
$app = require __DIR__ . '/bootstrap.php';

// =============================================================================
// TODO: User-defined endpoints
// TODO: User-defined extensions endpoints
// TODO: Customized Method not allowed error
// =============================================================================

$app->group('/activity', \Directus\Api\Routes\Activity::class);
$app->group('/auth', \Directus\Api\Routes\Auth::class);
$app->group('/fields', \Directus\Api\Routes\Fields::class);
$app->group('/files', \Directus\Api\Routes\Files::class);
$app->group('/groups', \Directus\Api\Routes\Groups::class);
$app->group('/items', \Directus\Api\Routes\Items::class);
$app->group('/collection_presets', \Directus\Api\Routes\CollectionPresets::class);
$app->group('/permissions', \Directus\Api\Routes\Permissions::class);
$app->group('/revisions', \Directus\Api\Routes\Revisions::class);
$app->group('/settings', \Directus\Api\Routes\Settings::class);
$app->group('/collections', \Directus\Api\Routes\Collections::class);
$app->group('/users', \Directus\Api\Routes\Users::class);
$app->group('/utils', \Directus\Api\Routes\Utils::class);

$app->run();

// $app->add(new \Directus\Slim\HttpCacheMiddleware());
// $app->add(new \Directus\Slim\ResponseCacheMiddleware());
//
// $app->hookEmitter->run('application.boot', $app);
// // $app->hook('slim.before.dispatch', function () use ($app, $authRouteWhitelist, $ZendDb, $acl, $authentication) {
// //     // API/Server is about to initialize
// //     $app->hookEmitter->run('application.init', $app);
// //     {
// //         // User is authenticated
// //         // And Directus is about to start
// //         $app->hookEmitter->run('directus.start', $app);
// //     }
// // });
//
// $app->hook('slim.after', function () use ($app) {
//     // API/Server is about to shutdown
//     $app->hookEmitter->run('application.shutdown', $app);
// });
//
// // $app->group('/custom', function () {
// //     $endpoints = $this->getCustomEndpoints();
// //
// //     // TODO: Add a way to prevent more user defined errors
// //     // by not including a file directly
// //     foreach ($endpoints as $endpoint) {
// //         require $endpoint;
// //     }
// // });
//
// /**
//  * Extension Alias
//  */
// $runExtensions = isset($_REQUEST['run_extension']) && $_REQUEST['run_extension'];
// if ($runExtensions) {
//     // Validate extension name
//     $extensionName = $_REQUEST['run_extension'];
//     if (!Bootstrap::extensionExists($extensionName)) {
//         throw new \RuntimeException(__t('extension_x_not_found', [
//             'name' => $extensionName
//         ]));
//     }
//
//     $extensionsDirectory = APPLICATION_PATH . '/customs/extensions';
//     $extensionEndpointsPath = "$extensionsDirectory/$extensionName/api.php";
//
//     $app->group(sprintf('/extensions/%s/?', $extensionName), function () use ($app, $extensionEndpointsPath) {
//         require $extensionEndpointsPath;
//     });
// }
//
// $app->notFound(function () use ($app, $acl) {
//     $projectInfo = get_project_info();
//
//     $app->response()->header('Content-Type', 'text/html; charset=utf-8');
//     $app->render('errors/404.twig', $projectInfo);
// });
