<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ips_symfony_project_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'go_to_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_new_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::newprojectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submit_new_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::saveprojectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_projects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::showprojectsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_projects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::editprojectsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit/projects',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_project' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::editprojectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_project' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::updateprojectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/update/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_project' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::deleteprojectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_new_section' => array (  0 =>   array (    0 => 'proj',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::addsectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proj',    ),    1 =>     array (      0 => 'text',      1 => '/add/section',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submit_new_section' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::savesectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save/section',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_project' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::showprojectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_new_task' => array (  0 =>   array (    0 => 'sect',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::addtaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sect',    ),    1 =>     array (      0 => 'text',      1 => '/add/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submit_new_task' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::savetaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_new_reference' => array (  0 =>   array (    0 => 'task_id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::addreferenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'task_id',    ),    1 =>     array (      0 => 'text',      1 => '/add/reference',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_new_work' => array (  0 =>   array (    0 => 'task_id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::addworkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'task_id',    ),    1 =>     array (      0 => 'text',      1 => '/add/work',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_task' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::showtaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_work' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::showworkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show/work',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_section' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::showsectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show/section',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'end_task' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPS\\SymfonyProjectBundle\\Controller\\DefaultController::endtaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/end/task',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
