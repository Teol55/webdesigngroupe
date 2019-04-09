---
title: Contact
form:
    name: contact-form
    fields:
        - name: name
          label: Nom:
          placeholder: votre nom
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: 
         
        - name: prenom
          label: Prénom
          placeholder: votre prénom
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true
             
        - name: message
          label: Message
          placeholder: Inscrivez votre message
          autofocus: on
          type: textarea
          validate:
            required: true
             
        - name: email
          label: Email
          placeholder: Entrz votre E-mail
          type: email
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.to }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Merci pour votre retour!
        - display: thankyou

---

# CONTACTEZ NOUS

14 Place du 77ème Régiment d’Infanterie,   
Bureau 113,   
49300 Cholet  

contact@WDG.com

06 10 20 30 40