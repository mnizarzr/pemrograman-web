<?php

namespace App\Routes;

use App\Controllers\GenreController;
use Exception;

class GenreRoutes
{
    private $controller;

    public function __construct()
    {
        $this->controller = new GenreController();
    }

    public function handle($method, $path)
    {
        switch ($method) {
            case 'GET':
                $this->handleGetRequest($path);
                break;
            case 'POST':
                $this->handlePostRequest($path);
                break;
            case 'PUT':
                $this->handlePutRequest($path);
                break;
            case 'DELETE':
                $this->handleDeleteRequest($path);
                break;
            default:
                throw new Exception('Unsupported request method.');
        }
    }

    private function handleGetRequest($path)
    {
        if ($path === '/api/genres') {
            echo $this->controller->index();
        } elseif (strpos($path, '/api/genres/') === 0) {
            $id = $this->extractIdFromPath($path);
            echo $this->controller->getById($id);
        }
    }

    private function handlePostRequest($path)
    {
        if ($path === '/api/genres') {
            echo $this->controller->insert();
        }
    }

    private function handlePutRequest($path)
    {
        if (strpos($path, '/api/genres/') === 0) {
            $id = $this->extractIdFromPath($path);
            echo $this->controller->update($id);
        }
    }

    private function handleDeleteRequest($path)
    {
        if (strpos($path, '/api/genres/') === 0) {
            $id = $this->extractIdFromPath($path);
            echo $this->controller->delete($id);
        }
    }

    private function extractIdFromPath($path)
    {
        $pathParts = explode('/', $path);
        return end($pathParts);
    }
}
