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
             
           
       buttons:
           -
               type: submit
               value: Envoyer
                     
       process:
           - mailchimp:
               required_fields: [news_letter]
               lists: [1234567, abcdefg]
               field_mappings:
                   mailchimpMergeField: my_custom_field      
---