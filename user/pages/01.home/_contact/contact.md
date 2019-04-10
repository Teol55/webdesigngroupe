---
title: contact
image_align: right
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
        - message: Merci pour votre message, nous vous contacterons rapidement.
        - redirect: home

---

# Zou ! chez WDG

Ca y est, vous êtes amoureux ? 
Vous souhaitez nous confier votre joli projet  
ou nous rencontrer pour vous faire une 
meilleure idée de qui nous sommes ? 
Facile ! 
Il ne reste plus qu'à compléter notre formulaire, 
nous nous occupons du reste.
C'est parti !

Sinon, vous pouvez appeler Arnaud,
au 06 10 20 30 50 ou par email à arnaud@WDG.com
