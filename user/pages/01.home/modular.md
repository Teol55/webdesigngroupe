---
title: WebDesignGroupe l'Agence du Digitale
menu: Accueil
onpage_menu: true
body_classes: "modular header-image fullwidth"

content:
    items: '@self.modular'
    order:
         custom:
            - _callout
            - _achievements 
            - _team           
            - _portfolio
            - _presentation
            - _references
            - _blog                               
            - _offer
            - _contact    
form:
       name: subscribe
       fields:
           - name: email
             label: Email
             placeholder: 'Votre E-mail'
             type: email
             classes: suscribe-text
             validate:
                required: true
                
           - name: Nom
             label: Votre Nom
             placeholder: 'Votre nom'
             classes: suscribe-text
             type: text
             
           - name: news_letter
             type: checkbox
             classes: suscribe-checkbox
             label: 'Oui, je veux recevoir des informations'
       buttons:
           -
               type: submit
               value: Submit
           -
               type: reset
               value: Reset
       process:
           - mailchimp:
               required_fields: [news_letter]
               lists: [1234567, abcdefg]
               field_mappings:
                   mailchimpMergeField: my_custom_field      
---