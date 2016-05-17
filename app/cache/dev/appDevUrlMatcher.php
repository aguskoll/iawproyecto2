<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        if (0 === strpos($pathinfo, '/admin')) {
            // adminPage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminAction',  '_route' => 'adminPage',);
            }

            // createTeam
            if ($pathinfo === '/admin/teamForm') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::crearEquipo',  '_route' => 'createTeam',);
            }

            if (0 === strpos($pathinfo, '/admin/editar')) {
                // editarPartidos
                if ($pathinfo === '/admin/editarPartidos') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::mostrarPartidosAction',  '_route' => 'editarPartidos',);
                }

                if (0 === strpos($pathinfo, '/admin/editarEquipo')) {
                    // editarEquipos
                    if ($pathinfo === '/admin/editarEquipos') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::mostrarEquiposAction',  '_route' => 'editarEquipos',);
                    }

                    // editarEquipo
                    if (preg_match('#^/admin/editarEquipo/(?P<idEquipo>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarEquipo')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editarEquipoAction',));
                    }

                }

                // editarPartido
                if (0 === strpos($pathinfo, '/admin/editarPartido') && preg_match('#^/admin/editarPartido/(?P<idPartido>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarPartido')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editarPartidoAction',));
                }

            }

            // crearFixture
            if ($pathinfo === '/admin/crearFixture') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::crearFixture',  '_route' => 'crearFixture',);
            }

            // agregarJugador
            if ($pathinfo === '/admin/agregarJugador') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::agregarJugador',  '_route' => 'agregarJugador',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/mostrar')) {
            // mostrarEquipos
            if ($pathinfo === '/mostrarEquipos') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultUserController::mostrarEquiposAction',  '_route' => 'mostrarEquipos',);
            }

            // mostrarTodos
            if ($pathinfo === '/mostrarPartidos') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultUserController::mostrarTodosPartidosAction',  '_route' => 'mostrarTodos',);
            }

            // mostrarJugadores
            if ($pathinfo === '/mostrarJugadores') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultUserController::mostrarJugadoresAction',  '_route' => 'mostrarJugadores',);
            }

        }

        // tablaPosiciones
        if ($pathinfo === '/tablaPosiciones') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultUserController::tablaPosicionesAction',  '_route' => 'tablaPosiciones',);
        }

        // jugadoresPorEquipo
        if (0 === strpos($pathinfo, '/jugadores') && preg_match('#^/jugadores/(?P<idEquipo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jugadoresPorEquipo')), array (  '_controller' => 'AppBundle\\Controller\\DefaultUserController::obtenerJugadoresPorEquipoAction',));
        }

        // readme
        if ($pathinfo === '/readme') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultUserController::readmeAction',  '_route' => 'readme',);
        }

        if (0 === strpos($pathinfo, '/editor')) {
            // editorPage
            if ($pathinfo === '/editor') {
                return array (  '_controller' => 'AppBundle\\Controller\\EditorController::adminAction',  '_route' => 'editorPage',);
            }

            // editarJugadores
            if (0 === strpos($pathinfo, '/editor/cargarEstadisticasJugadores') && preg_match('#^/editor/cargarEstadisticasJugadores/(?P<idPartido>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarJugadores')), array (  '_controller' => 'AppBundle\\Controller\\EditorController::editarJugadoresAction',));
            }

            // asignarEstadisticas
            if (0 === strpos($pathinfo, '/editor/asignarEstadisticas') && preg_match('#^/editor/asignarEstadisticas/(?P<idJugador>[^/]++)/(?P<idPartido>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignarEstadisticas')), array (  '_controller' => 'AppBundle\\Controller\\EditorController::asignarEstadisticasJugadoresAction',));
            }

            // cargarResultados
            if ($pathinfo === '/editor/cargarResultados') {
                return array (  '_controller' => 'AppBundle\\Controller\\EditorController::cargarResultadosAction',  '_route' => 'cargarResultados',);
            }

            // updateResultados
            if (0 === strpos($pathinfo, '/editor/updateResultados') && preg_match('#^/editor/updateResultados/(?P<idPartido>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateResultados')), array (  '_controller' => 'AppBundle\\Controller\\EditorController::updateResultadosAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // loginForm
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'loginForm',);
                }

                // loginCheck
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'loginCheck',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
