---
title: compétences
content:
    items: '@self.modular'
    order:
        custom:
            - _callout
            - _developpement
            - _design
            - _marketing
            - _contact
body_classes: 'modular header-image fullwidth'
menu: 
visible: false
onpage_menu: false
cache_enable: false
form:
    name: contact-form
    fields:
        - name: name
          label: Name
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
          placeholder: Entrez votre E-mail
          type: email
          validate:
            required: true

    buttons:
        - type: submit
          value: Envoyer
    

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
        - message: Merci pour votre message, nous vous contacterons rapidement
        - display: thankyou
        
---

