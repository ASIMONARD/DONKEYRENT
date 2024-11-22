<?php

class Router
{
    public function getController(string $uri): array
    {
        $explodeUri = explode('/', $uri);
        $controller = $explodeUri[1] ? ucfirst($explodeUri[1]): 'Home';
        $action = $explodeUri[2] ?? 'list';

        if ($controller === 'Home')
        {
            $action = 'home';
        }

        $controller .= 'Controller';

        return [
            'controller' => $controller,
            'action' => $action
        ];
    }

}


?>