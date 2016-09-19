<?php

/**
 * Отсылает клиенту код ошибки HTTP
 */
function set_http_error($code)
{
    header('X-PHP-Response-Code: '.$code, true, $code);
}

//////////////////////////////////////////////////////////
// МАРШРУТИЗАЦИЯ

/**
 * Выполняет переадресацию на указанный адрес $url
 */
function redirect($url = './')
{
    session_write_close();
    header('Location: ' . $url);
    exit;
}

/**
 * Определяет контроллер и метод, в которых передается запрос
 */
function get_route_url()
{
    //Параметры по умолчанию (indexController::indexAction)
    $result = array(
        'module' => 'index',
        'action' => 'index',
    );

    $route = isset($_GET['_R']) ? $_GET['_R'] : '/';
    if (!empty($route) && $route != '/') {
        $uri_parts = array_filter(explode('/', trim($route, ' /')), 'strlen');
        $count_parts = count($uri_parts);
        if ($count_parts == 1) {
            $result['module'] = $uri_parts[0];
        } elseif ($count_parts >= 2) {
            $result['module'] = $uri_parts[0];
            $result['action'] = $uri_parts[1];
        }
    }

    return $result;
}

/**
 * Выполняет метод контроллера
 */

function route_request()
{
    $route = get_route_url();
    $controllerClass = ucfirst($route['module']).'Controller';
    $actionName = 'action'.(strlen($route['action']) > 0 ? ucfirst($route['action']) : 'Index');

    if (!class_exists($controllerClass)) {
        set_http_error(404);
        return;
    }

    $controller = new $controllerClass;
    if (!method_exists($controllerClass, $actionName)) {
        set_http_error(404);
        return;
    }

    call_user_func(array($controller, $actionName));
}

//////////////////////////////////////////////////////////
// ПОДДЕРЖКА ВИДОВ

/**
 * Выполняет вывод указанного шаблона $template с данными
 */
function render($template, $data = array())
{
    extract($data);
    require ('templates/' . $template . '.php');
}