<?php

class HomeController
{
    private $to_email = "edwingbeti@gmail.com";

    /**
     * Affiche la page d'accueil
     */
    public function index()
    {
        $success_message = '';
        $error_message = '';
        $form_data = [
            'name' => '',
            'company' => '',
            'email' => '',
            'phone' => '',
            'project_type' => '',
            'message' => ''
        ];

        include 'HomeView.php';
    }

    /**
     * Affiche la page Full-Stack
     */
    public function fullstack()
    {
        $success_message = '';
        $error_message = '';
        $form_data = [
            'name' => '',
            'company' => '',
            'email' => '',
            'phone' => '',
            'project_type' => '',
            'message' => ''
        ];

        include 'FullStackView.php';
    }

    /**
     * Traite le formulaire de contact
     */
    public function contact()
    {
        // Récupération et nettoyage des données
        $form_data = [
            'name' => trim($_POST['name'] ?? ''),
            'company' => trim($_POST['company'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'phone' => trim($_POST['phone'] ?? ''),
            'project_type' => $_POST['project_type'] ?? '',
            'message' => trim($_POST['message'] ?? '')
        ];

        // Validation
        $errors = $this->validateForm($form_data);

        $success_message = '';
        $error_message = '';

        // Si pas d'erreurs, envoyer l'email
        if (empty($errors)) {
            if ($this->sendEmail($form_data)) {
                $success_message = "Votre message a été envoyé avec succès ! Je vous répondrai dans les plus brefs délais.";
                // Réinitialiser les données du formulaire
                $form_data = [
                    'name' => '',
                    'company' => '',
                    'email' => '',
                    'phone' => '',
                    'project_type' => '',
                    'message' => ''
                ];
            } else {
                $error_message = "Erreur lors de l'envoi du message. Veuillez réessayer ou me contacter directement.";
            }
        } else {
            $error_message = implode("<br>", $errors);
        }

        include 'HomeView.php';
    }

    /**
     * Valide les données du formulaire
     */
    private function validateForm($form_data)
    {
        $errors = [];

        if (empty($form_data['name'])) {
            $errors[] = "Le nom et prénom sont obligatoires.";
        }

        if (empty($form_data['email'])) {
            $errors[] = "L'email est obligatoire.";
        } elseif (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'email n'est pas valide.";
        }

        if (empty($form_data['message'])) {
            $errors[] = "Le message est obligatoire.";
        }

        if ($form_data['project_type'] === '' || $form_data['project_type'] === 'Sélectionnez le type de projet') {
            $errors[] = "Veuillez sélectionner un type de projet.";
        }

        return $errors;
    }

    /**
     * Envoie l'email de contact
     */
    private function sendEmail($form_data)
    {
        $subject = "Nouvelle demande de contact - " . $form_data['name'];
        $email_body = "
            Nouvelle demande de contact reçue :

            Nom/Prénom: " . $form_data['name'] . "
            Entreprise: " . $form_data['company'] . "
            Email: " . $form_data['email'] . "
            Téléphone: " . $form_data['phone'] . "
            Type de projet: " . $form_data['project_type'] . "

            Message:
            " . $form_data['message'] . "

            ---
            Email envoyé depuis le site web
                    ";

        $headers = "From: " . $form_data['email'] . "\r\n";
        $headers .= "Reply-To: " . $form_data['email'] . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        return mail($this->to_email, $subject, $email_body, $headers);
    }
}
