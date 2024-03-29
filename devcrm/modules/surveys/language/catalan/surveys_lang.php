<?php

# Version 2.3.0

$lang['new_survey']                                       = 'Nova enquesta';
$lang['surveys']                                          = 'Enquestes';
$lang['survey']                                           = 'Enquesta';
$lang['survey_lowercase']                                 = 'enquesta';
$lang['survey_no_mail_lists_selected']                    = 'No hi ha llistes de correu seleccionades';
$lang['survey_send_success_note']                         = 'Tots els emails de l\'enquesta ( %s) seran envíats via Cron Job amb intervals de 5 minuts';
$lang['survey_result']                                    = 'Resultat enquesta: %s';
$lang['question_string']                                  = 'Pregunta';
$lang['question_field_string']                            = 'Camp';
$lang['survey_list_view_tooltip']                         = 'Veure resultats';
$lang['survey_list_view_results_tooltip']                 = 'Veure resultats';
$lang['survey_add_edit_subject']                          = 'Assumpte';
$lang['survey_add_edit_email_description']                = 'Email descripció';
$lang['survey_include_survey_link']                       = 'Incloure enllaç de l\'enquesta en la descripció';
$lang['survey_available_mail_lists_custom_fields']        = 'Camps personalitzats disponibles a partir de llistes de correu';
$lang['survey_mail_lists_custom_fields_tooltip']          = 'Campos personalitzats es poden utilitzar per a editar email. CONSELL: Cliqui editor email i seleccioni menú desplegable per afegir automàticament.';
$lang['survey_add_edit_short_description_view']           = 'Veure descripció breu';
$lang['survey_add_edit_from']                             = 'Des de';
$lang['survey_add_edit_redirect_url']                     = 'URL redireccionament enquesta';
$lang['survey_add_edit_red_url_note']                     = 'Quan enquesta acabi on redirigir usuario? (deixar en blanc url per aquest lloc)';
$lang['survey_add_edit_disabled']                         = 'Desabilitat';
$lang['survey_add_edit_only_for_logged_in']               = 'Només iniciar sessió per als participants (personal, clients)';
$lang['send_survey_string']                               = 'Enviar Enquesta';
$lang['survey_send_mail_list_clients']                    = 'Clients';
$lang['survey_send_mail_list_staff']                      = 'Personal';
$lang['survey_send_mail_lists_string']                    = 'Llistes correu';
$lang['survey_send_mail_lists_note_logged_in']            = 'Nota: Si ´només envia enquesta llistas correu als qui han iniciat sessió els participants no han d\'estar marcats';
$lang['survey_send_string']                               = 'Enviar';
$lang['survey_send_to_total']                             = 'Enviar a total %s emails';
$lang['survey_send_till_now']                             = 'Fins ara';
$lang['survey_send_finished']                             = 'Enviament enquesta acabat: %s';
$lang['survey_added_to_queue']                            = 'Aquesta enquesta s\'afegeix a la cua de Cron Job en %s';
$lang['survey_questions_string']                          = 'Preguntes enquesta';
$lang['survey_insert_field']                              = 'Inserir camp';
$lang['survey_field_checkbox']                            = 'Caixa';
$lang['survey_field_radio']                               = 'Radio';
$lang['survey_field_input']                               = 'Camp entrada';
$lang['survey_field_textarea']                            = 'Àrea text';
$lang['survey_question_required']                         = 'Necessari';
$lang['survey_question_only_for_preview']                 = 'Només per a vista prèvia';
$lang['survey_create_first']                              = 'Primer ha de crear enquesta, després podrà inserir preguntes.';
$lang['survey_dt_name']                                   = 'Nom';
$lang['survey_dt_total_questions']                        = 'Total preguntes';
$lang['survey_dt_total_participants']                     = 'Total participants';
$lang['survey_dt_date_created']                           = 'Data creació';
$lang['survey_dt_active']                                 = 'Actiu';
$lang['survey_text_questions_results']                    = 'Resultat preguntes enquesta';
$lang['survey_view_all_answers']                          = 'Veure totes les respostes';
$lang['settings_survey_send_emails_per_cron_run']         = 'Quants emails enviats per hora';
$lang['settings_survey_send_emails_per_cron_run_tooltip'] = 'Aquesta opció s\'utilitza quan s\'envien enquestes. El cronjob de l\'enquesta enviarà X emails per hora. Alguns proveïdors d\'allotjament tenen limitació per enciar emails per hora';
$lang['settings_cron_surveys']                            = 'Enquestes';
$lang['survey_no_questions']                              = 'Encara no s\'han afegit preguntes a aquesta enquesta.';
$lang['survey_submit']                                    = 'Enviar';
$lang['survey_send_to_lists']                             = 'Enviar llistes enquesta';
$lang['survey_send_notice']                               = 'Els Emails s\'enviaran via CRON JOB per hora.';
$lang['survey_customers_all']                             = 'Tots els Clients';

# Mail Lists
$lang['mail_lists']                            = 'Llistes emails';
$lang['mail_list']                             = 'Llista emails';
$lang['new_mail_list']                         = 'Nova llista emails';
$lang['mail_list_lowercase']                   = 'llista emails';
$lang['custom_field_deleted_success']          = 'camp personalitzat eliminat';
$lang['custom_field_deleted_fail']             = 'Problema en eliminar camp personalitzat';
$lang['email_removed_from_list']               = 'Email eliminat de la llista';
$lang['email_remove_fail']                     = 'Problema en eliminar email de la lista';
$lang['staff_mail_lists']                      = 'Llistes email del personal';
$lang['clients_mail_lists']                    = 'Llistes email dels clients';
$lang['mail_list_total_imported']              = 'Total emails importats: %s';
$lang['mail_list_total_duplicate']             = 'Total emails duplicats: %s';
$lang['mail_list_total_failed_to_insert']      = 'Total emails no inserits: %s';
$lang['mail_list_total_invalid']               = 'Adreça email invàlida: %s';
$lang['cant_edit_mail_list']                   = 'No pot editar aquesta llista, s\'omple automàticament';
$lang['mail_list_add_edit_name']               = 'Nom llista emails';
$lang['mail_list_add_edit_customfield']        = 'Afegir camp personalitzat';
$lang['mail_lists_view_email_email_heading']   = 'Email';
$lang['mail_lists_view_email_date_heading']    = 'Afegit el';
$lang['add_new_email_to']                      = 'Agregar nou email a %s';
$lang['import_emails_to']                      = 'Importar emails a %s';
$lang['mail_list_new_email_edit_add_label']    = 'Email';
$lang['mail_list_import_file']                 = 'Importar arxiu';
$lang['mail_list_available_custom_fields']     = 'Camps personalitzats disponibles';
$lang['submit_import_emails']                  = 'Importar emails';
$lang['btn_import_emails']                     = 'Importar emails (Excel)';
$lang['btn_add_email_to_list']                 = 'Afegir email a aquesta llista';
$lang['mail_lists_dt_list_name']               = 'Lsista de noms';
$lang['mail_lists_dt_datecreated']             = 'Creata el';
$lang['mail_lists_dt_creator']                 = 'Creador';
$lang['email_added_to_mail_list_successfully'] = 'Email afegit a la llista';
$lang['email_is_duplicate_mail_list']          = 'Email ja és en aquesta llista';