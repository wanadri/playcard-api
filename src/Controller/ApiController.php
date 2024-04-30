<?php

namespace App\Controller;

use Cake\View\JsonView;

class ApiController extends AppController
{
    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    // this will return response success
    public function success($data)
    {
        $this->set('response', [
            'error' => false,
            'message' => 'Request Success',
            'data' => $data
        ]);

        $this->viewBuilder()
            ->setOption('serialize', 'response');
    }
}
