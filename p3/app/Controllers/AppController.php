<?php

namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $choice = $this->app->old('choice');
        $correct = $this->app->old('correct');
        $result = $this->app->old('result');

        return $this->app->view('index', [
            'choice' => $choice,
            'correct' => $correct,
            'result' => $result
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'choice' => 'required'
        ]);

        $choice = $this->app->input('choice');

        $words = [
               'community',
               'develop',
               'environment',
               'excellent'
           ];

        $correct = $words[array_rand($words)];

        $result = $choice == $correct;

        # To do: persist round details to the database
        $this->app->db()->insert('rounds', [
            'choice' => $choice,
            'result' => $result ? 1 : 0,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect(
            '/',
            [
            'choice' => $choice,
            'correct' => $correct,
            'result' => $result
        ]
        );
    }

    public function history()
    {
        return $this->app->view('history');
    }

    public function round()
    {
        return $this->app->view('round');
    }
}