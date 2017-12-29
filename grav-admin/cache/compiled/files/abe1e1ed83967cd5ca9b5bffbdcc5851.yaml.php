<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/OpenServer/domains/grav/grav-admin/user/plugins/login/languages/fr.yaml',
    'modified' => 1512519614,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Nom d’utilisateur',
            'EMAIL' => 'E-mail',
            'USERNAME_EMAIL' => 'Nom d’utilisateur/E-mail',
            'PASSWORD' => 'Mot de passe',
            'ACCESS_DENIED' => 'Accès refusé...',
            'LOGIN_FAILED' => 'Échec de la connexion...',
            'LOGIN_SUCCESSFUL' => 'Vous vous êtes connecté avec succès.',
            'BTN_LOGIN' => 'Connexion',
            'BTN_LOGOUT' => 'Déconnexion',
            'BTN_FORGOT' => 'Mot de passe oublié',
            'BTN_REGISTER' => 'S’enregister',
            'BTN_RESET' => 'Réinitialiser le mot de passe',
            'BTN_SEND_INSTRUCTIONS' => 'Envoyer les instructions de Réinitialisation',
            'RESET_LINK_EXPIRED' => 'Le lien de réinitialisation a expiré, veuillez réessayer',
            'RESET_PASSWORD_RESET' => 'Le mot de passe a été réinitialisé',
            'RESET_INVALID_LINK' => 'Le lien de réinitialisation utilisé n’est pas valide, veuillez réessayer',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Les instructions pour la réinitialisation de votre mot de passe ont été envoyées par e-mail',
            'FORGOT_FAILED_TO_EMAIL' => 'Impossible d’envoyer les instructions, veuillez réessayer ultérieurement',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Impossible de réinitialiser le mot de passe pour %s, aucune adresse e-mail n’a été paramétrée',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'L’utilisateur avec le nom d’utilisateur <b>%s</b> n’existe pas',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Impossible de réinitialiser le mot de passe. Ce site n’est pas configuré pour envoyer des e-mails',
            'FORGOT_EMAIL_SUBJECT' => 'Demande de réinitialisation de mot de passe %s',
            'FORGOT_EMAIL_BODY' => '<h1>Réinitialisation de mot de passe</h1><p>%1$s,</p><p>Une demande a été faite sur <b>%4$s</b> pour la réinitialisation de votre mot de passe.</p><p><br /><a href="%2$s" class="btn-primary">Cliquez ici pour réinitialiser votre mot de passe</a><br /><br /></p><p>Vous pouvez également copier l’URL suivante dans la barre d’adresse de votre navigateur :</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Cordialement,<br /><br />%3$s</p>',
            'SESSION' => 'Session - &ldquo;Se souvenir de moi&rdquo;',
            'REMEMBER_ME' => 'Se souvenir de moi',
            'REMEMBER_ME_HELP' => 'Définit un cookie persistant sur votre navigateur autorisant l’authentification par connexion persistante entre les sessions.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Quelqu’un d’autre a utilisé vos informations de connexion pour accéder à cette page ! Toutes les sessions ont été déconnectées. Veuillez vous connecter avec vos identifiants et vérifier vos données.',
            'BUILTIN_CSS' => 'Utiliser les CSS intégrés',
            'BUILTIN_CSS_HELP' => 'Utiliser les CSS fournis dans le plugin d’administration',
            'ROUTE' => 'Chemin de connexion',
            'ROUTE_HELP' => 'Chemin personnalisé vers une page de connexion personnalisée proposée par votre thème',
            'ROUTE_REGISTER' => 'Chemin vers l’inscription',
            'ROUTE_REGISTER_HELP' => 'Chemin vers la page d’inscription. A définir si vous souhaitez utiliser la page d’inscription intégrée. Laisser vide si vous disposez de votre propre formulaire d’inscription.',
            'USERNAME_NOT_VALID' => 'Le nom d’utilisateur doit comporter entre 3 et 16 caractères et peut être composé de lettres minuscules, de chiffres et de tirets de soulignement (underscores) et des traits d’union. Les lettres majuscules, les espaces et les caractères spéciaux ne sont pas autorisés.',
            'USERNAME_NOT_AVAILABLE' => 'Le nom d’utilisateur %s existe déjà, veuillez en choisir un autre.',
            'PASSWORD_NOT_VALID' => 'Le mot de passe doit contenir au moins un chiffre, une majuscule et une minuscule et être composé d’au moins 8 caractères',
            'PASSWORDS_DO_NOT_MATCH' => 'Les mots de passe sont différents. Réessayez de saisir le même mot de passe deux fois.',
            'USER_NEEDS_EMAIL_FIELD' => 'L’utilisateur a besoin d’un champ pour e-mail',
            'EMAIL_SENDING_FAILURE' => 'Une erreur est survenue lors de l’envoi de l’e-mail.',
            'ACTIVATION_EMAIL_SUBJECT' => 'Activer votre compte sur %s',
            'ACTIVATION_EMAIL_BODY' => 'Bonjour %s, <a href="%s">cliquez</a> pour activer votre compte sur %s',
            'WELCOME_EMAIL_SUBJECT' => 'Bienvenue sur %s',
            'WELCOME_EMAIL_BODY' => 'Bonjour %s, bienvenue sur %s!',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Nouvel utilisateur sur %s',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'NOTIFICATION_EMAIL_BODY' => 'Bonjour, un nouvel utilisateur s’est inscrit sur %s. Nom d’utilisateur : %s, e-mail : %s',
            'ACTIVATION_LINK_EXPIRED' => 'Le lien d’activation a expiré',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Utilisateur activé avec succès',
            'INVALID_REQUEST' => 'Requête non valide',
            'USER_REGISTRATION' => 'Inscription de l’utilisateur',
            'USER_REGISTRATION_ENABLED_HELP' => 'Activer l’inscription des utilisateurs',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Valider la double saisie du mot de passe',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Comparer et valider deux champs pour les mots de passe `Mot de passe 1` et `Mot de passe 2`. Activez cette option si vous avez deux champs de mots de passe dans le formulaire d’inscription.',
            'SET_USER_DISABLED' => 'Définir l’utilisateur comme désactivé',
            'SET_USER_DISABLED_HELP' => 'La meilleure pratique si vous utilisez l’option `Envoyer un e-mail d’activation`. Ajoute l’utilisateur à Grav, mais le défini comme étant désactivé.',
            'LOGIN_AFTER_REGISTRATION' => 'Connecte l’utilisateur après son inscription',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Identifier immédiatement l’utilisateur après l’inscription. Si l’e-mail d’activation est demandé, l’utilisateur sera connecté immédiatement après l’activation du compte.',
            'SEND_ACTIVATION_EMAIL' => 'Envoyer un e-mail d’activation',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Envoyer un e-mail à l’utilisateur pour l’activation son compte. Lorsque vous utilisez cette fonction, activez l’option `Définir l’utilisateur comme désactivé` afin que l’utilisateur soit désactivé et qu’un e-mail lui soit envoyé pour activer son compte.',
            'SEND_NOTIFICATION_EMAIL' => 'Envoyer un e-mail de notification',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Informe l’administrateur du site qu’un nouvel utilisateur s’est enregistré. L’e-mail sera envoyé à la personne renseignée dans le champ `À` dans la configuration du plugin e-mail.',
            'SEND_WELCOME_EMAIL' => 'Envoyer un e-mail de bienvenue',
            'SEND_WELCOME_EMAIL_HELP' => 'Envoyer un e-mail à un nouvel utilisateur enregistré.',
            'DEFAULT_VALUES' => 'Valeurs par défaut',
            'DEFAULT_VALUES_HELP' => 'Liste des noms et valeurs associés pour les champs. Ils seront ajoutés au profil utilisateur par défaut (fichier yaml), sans pouvoir être configurables par l’utilisateur. Séparez les différentes valeurs par une virgule, sans espaces entre les valeurs.',
            'ADDITIONAL_PARAM_KEY' => 'Paramètre',
            'ADDITIONAL_PARAM_VALUE' => 'Valeur',
            'REGISTRATION_FIELDS' => 'Champs d’inscription',
            'REGISTRATION_FIELDS_HELP' => 'Ajouter les champs qui seront ajoutés au fichier yaml de l’utilisateur. Les champs non listés ne seront pas ajoutés même s’ils sont présent sur le formulaire d’inscription',
            'REGISTRATION_FIELD_KEY' => 'Nom du champ',
            'REDIRECT_AFTER_LOGIN' => 'Redirection après connexion',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Chemin personnalisé de redirection après la connexion',
            'REDIRECT_AFTER_REGISTRATION' => 'Redirection après inscription',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Chemin personnalisé de redirection après l’inscription',
            'OPTIONS' => 'Options',
            'EMAIL_VALIDATION_MESSAGE' => 'Doit-être une adresse e-mail valide',
            'PASSWORD_VALIDATION_MESSAGE' => 'Le mot de passe doit-être composé d’au moins un chiffre, une majuscule et une minuscule, et au moins 8 caractères',
            'TIMEOUT_HELP' => 'Définit le délai d’expiration de la session en secondes lorsque `Se souvenir de moi` est activé et coché par l’utilisateur. Minimum de 604800 ce qui correspond à 1 semaine.',
            'GROUPS_HELP' => 'Liste des groupes auxquels le nouvel utilisateur enregistré fera partie, le cas échéant.',
            'SITE_ACCESS_HELP' => 'Liste des niveaux d’accès au site attribués au nouvel utilisateur enregistré. Exemple : `login` -> `true` ',
            'WELCOME' => 'Bienvenue',
            'REDIRECT_AFTER_ACTIVATION' => 'Redirection après l’activation de l’utilisateur',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Utilisé s’il est nécessaire pour l’utilisateur d’activer le compte par e-mail. Une fois activé, ce chemin s’affichera',
            'REGISTRATION_DISABLED' => 'Inscription désactivée',
            'USE_PARENT_ACL_LABEL' => 'Appliquer les règles d’accès parentes',
            'USE_PARENT_ACL_HELP' => 'Utiliser les règles d’accès parentes si aucune règle n’a été définie',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Protéger le média d\'une page par une protection par connexion',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Si activé, les médias d\'une page protégée par connexion sera également protégé par un système de connexion et ne pourra pas être visible à moins d\'être connecté.'
        ]
    ]
];
