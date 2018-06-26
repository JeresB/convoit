<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/adminbo')) {
                if (0 === strpos($pathinfo, '/adminbo/internaute')) {
                    // internaute_index
                    if (rtrim($pathinfo, '/') === '/adminbo/internaute') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_internaute_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'internaute_index');
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\internauteController::indexAction',  '_route' => 'internaute_index',);
                    }
                    not_internaute_index:

                    // internaute_new
                    if ($pathinfo === '/adminbo/internaute/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_internaute_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\internauteController::newAction',  '_route' => 'internaute_new',);
                    }
                    not_internaute_new:

                    // internaute_show
                    if (preg_match('#^/adminbo/internaute/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_internaute_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'internaute_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\internauteController::showAction',));
                    }
                    not_internaute_show:

                    // internaute_edit
                    if (preg_match('#^/adminbo/internaute/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_internaute_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'internaute_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\internauteController::editAction',));
                    }
                    not_internaute_edit:

                    // internaute_delete
                    if (preg_match('#^/adminbo/internaute/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_internaute_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'internaute_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\internauteController::deleteAction',));
                    }
                    not_internaute_delete:

                }

                if (0 === strpos($pathinfo, '/adminbo/v')) {
                    if (0 === strpos($pathinfo, '/adminbo/ville')) {
                        // ville_index
                        if (rtrim($pathinfo, '/') === '/adminbo/ville') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ville_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'ville_index');
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville_index',);
                        }
                        not_ville_index:

                        // ville_new
                        if ($pathinfo === '/adminbo/ville/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_ville_new;
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                        }
                        not_ville_new:

                        // ville_show
                        if (preg_match('#^/adminbo/ville/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ville_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::showAction',));
                        }
                        not_ville_show:

                        // ville_edit
                        if (preg_match('#^/adminbo/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_ville_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::editAction',));
                        }
                        not_ville_edit:

                        // ville_delete
                        if (preg_match('#^/adminbo/ville/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ville_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::deleteAction',));
                        }
                        not_ville_delete:

                    }

                    if (0 === strpos($pathinfo, '/adminbo/voiture')) {
                        // voiture_index
                        if (rtrim($pathinfo, '/') === '/adminbo/voiture') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_voiture_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'voiture_index');
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::indexAction',  '_route' => 'voiture_index',);
                        }
                        not_voiture_index:

                        // voiture_new
                        if ($pathinfo === '/adminbo/voiture/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_voiture_new;
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::newAction',  '_route' => 'voiture_new',);
                        }
                        not_voiture_new:

                        // voiture_show
                        if (preg_match('#^/adminbo/voiture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_voiture_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::showAction',));
                        }
                        not_voiture_show:

                        // voiture_edit
                        if (preg_match('#^/adminbo/voiture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_voiture_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::editAction',));
                        }
                        not_voiture_edit:

                        // voiture_delete
                        if (preg_match('#^/adminbo/voiture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_voiture_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'voiture_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VoitureController::deleteAction',));
                        }
                        not_voiture_delete:

                    }

                }

                // back_office_homepage
                if (rtrim($pathinfo, '/') === '/adminbo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'back_office_homepage');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
                }

                // stats_homepage
                if ($pathinfo === '/adminbo/stats') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\StatsController::indexAction',  '_route' => 'stats_homepage',);
                }

            }

            if (0 === strpos($pathinfo, '/api')) {
                // web_service_homepage
                if (rtrim($pathinfo, '/') === '/api') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'web_service_homepage');
                    }

                    return array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_service_homepage',);
                }

                // web_service_search_homepage
                if (preg_match('#^/api/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_service_search_homepage')), array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::searchAction',));
                }

                if (0 === strpos($pathinfo, '/api/de')) {
                    // web_service_details_homepage
                    if (0 === strpos($pathinfo, '/api/details') && preg_match('#^/api/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_service_details_homepage')), array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::detailsAction',));
                    }

                    // search_depart_homepage
                    if (0 === strpos($pathinfo, '/api/depart') && preg_match('#^/api/depart/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_depart_homepage')), array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::searchDepartAction',));
                    }

                }

                // search_arrivee_homepage
                if (0 === strpos($pathinfo, '/api/arrivee') && preg_match('#^/api/arrivee/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_arrivee_homepage')), array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::searchArriveeAction',));
                }

            }

        }

        // front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_office_homepage');
            }

            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
        }

        // trajet_homepage
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trajet_homepage')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::detailsAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
