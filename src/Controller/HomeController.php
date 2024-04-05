<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contact = array_map('trim', $_POST);
            if (empty($contact['name'])) {
                $errors[] = 'Name is required';
            }
            if (empty($contact['email'])) {
                $errors[] = 'Email is required';
            }
            if (filter_var($contact['email'], FILTER_VALIDATE_EMAIL) === false) {
                $errors[] = 'Email is not valid';
            }
            if (empty($contact['subject'])) {
                $errors[] = 'Please choose a subject in the list';
            }
            if (empty($errors)) {
                // @todo store the contact information in the session
                header('Location: /form-success');
                exit();
            }
        }
        return $this->twig->render('Home/index.html.twig', [
            'errors' => $errors,
            'contact' => $contact ?? [],
        ]);
    }

    /**
     * Display form success page
     */
    public function formSuccess(): string
    {
        // @todo retrieve the contact information from the session
        return $this->twig->render('Home/form-success.html.twig', [
            // @todo pass the contact information to the template
        ]);
    }
}
