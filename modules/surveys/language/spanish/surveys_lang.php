<?php

# Version 2.3.0

$lang['survey_submit']                                    = 'Enviar';
$lang['new_survey']                                       = 'Nueva encuesta';
$lang['surveys']                                          = 'Encuestas';
$lang['survey']                                           = 'Encuesta';
$lang['survey_lowercase']                                 = 'encuesta';
$lang['survey_no_mail_lists_selected']                    = 'No hay listas de correo seleccionadas';
$lang['survey_send_success_note']                         = 'Todos los correos electrónicos de la encuesta (%s) seran enviados vía Cron Job con intervalos de 5 minutos';
$lang['survey_result']                                    = 'Resultados encuesta: %s';
$lang['question_string']                                  = 'Pregunta';
$lang['question_field_string']                            = 'Campo';
$lang['survey_list_view_tooltip']                         = 'Ver encuesta';
$lang['survey_list_view_results_tooltip']                 = 'Ver resultados';
$lang['survey_add_edit_subject']                          = 'Tema de la encuesta';
$lang['survey_add_edit_email_description']                = 'Descripción encuesta (descripción del email)';
$lang['survey_include_survey_link']                       = 'Incluir enlace de la encuesta en la descripción';
$lang['survey_available_mail_lists_custom_fields']        = 'Campos personalizados disponibles a partir de listas de email';
$lang['survey_mail_lists_custom_fields_tooltip']          = 'Los campos personalizados se pueden utilizar para el editar el email.';
$lang['survey_add_edit_short_description_view']           = 'Breve descripción de la encuesta (ver descripción)';
$lang['survey_add_edit_from']                             = 'Desde (se mostrará en el email)';
$lang['survey_add_edit_redirect_url']                     = 'URL de redireccionamiento encuesta';
$lang['survey_add_edit_red_url_note']                     = 'Cuando la encuesta ha acabado donde redirigir al usuario? (dejar en blanco para este sitio URL).';
$lang['survey_add_edit_disabled']                         = 'Deshabilitado';
$lang['survey_add_edit_only_for_logged_in']               = 'Sólo para usuarios registrados (personal y clientes)';
$lang['send_survey_string']                               = 'Enviar encuesta';
$lang['survey_send_mail_list_clients']                    = 'Clientes';
$lang['survey_send_mail_list_staff']                      = 'Equipo';
$lang['survey_send_mail_lists_string']                    = 'Listas de correo';
$lang['survey_send_mail_lists_note_logged_in']            = 'Nota: si está enviando la encuesta a las listas de correo, la opción Sólo para usuarios registrados debe estar desactivado.';
$lang['survey_send_string']                               = 'Enviar';
$lang['survey_send_to_total']                             = 'Enviar un total de %s mensajes de email';
$lang['survey_send_till_now']                             = 'Hasta ahora';
$lang['survey_send_finished']                             = 'El envío de la encuesta %s terminó';
$lang['survey_added_to_queue']                            = 'Se añade esta encuesta a la cola de Cron Job en %s';
$lang['survey_questions_string']                          = 'Preguntas de la encuesta';
$lang['survey_insert_field']                              = 'Insertar campo';
$lang['survey_field_checkbox']                            = 'Checkbox';
$lang['survey_field_radio']                               = 'Radio';
$lang['survey_field_input']                               = 'Campo de entrada';
$lang['survey_field_textarea']                            = 'Área de texto';
$lang['survey_question_required']                         = 'Necesario';
$lang['survey_question_only_for_preview']                 = 'Sólo para la vista previa';
$lang['survey_create_first']                              = 'Es necesario crear primero la encuesta, entonces usted será capaz de insertar las preguntas.';
$lang['survey_dt_name']                                   = 'Nombre';
$lang['survey_dt_total_questions']                        = 'Total de preguntas';
$lang['survey_dt_total_participants']                     = 'Total de participantes';
$lang['survey_dt_date_created']                           = 'Fecha de creación';
$lang['survey_dt_active']                                 = 'Activo';
$lang['survey_text_questions_results']                    = 'Resultado de las preguntas de la encuesta';
$lang['survey_view_all_answers']                          = 'Ver todas las respuestas';
$lang['settings_survey_send_emails_per_cron_run']         = 'Cantidad de mensajes de email enviados por el Cron Job (encuestas)';
$lang['settings_survey_send_emails_per_cron_run_tooltip'] = 'Esta opción se utiliza cuando se envían encuestas. La encuesta de Cron Job se ejecuta cada 5 minutos. puede establecer la cantidad de email que se envía cada 5 minutos.';
$lang['settings_cron_surveys']                            = 'Encuestas';
$lang['survey_no_questions']                              = 'Esta encuesta no contiene preguntas.';
$lang['survey_send_to_lists']                             = 'Encuesta enviar a la listas';
$lang['survey_send_notice']                               = 'Los correos serán enviados utilizado el Cron Job por hora.';
$lang['survey_customers_all']                             = 'Todos los clientes';
$lang['mail_lists']                                       = 'Listas de correo';
$lang['mail_list']                                        = 'Lista de correo';
$lang['new_mail_list']                                    = 'Nueva lista de correo';
$lang['mail_list_lowercase']                              = 'lista de correo';
$lang['custom_field_deleted_success']                     = 'Campo personalizado eliminado';
$lang['custom_field_deleted_fail']                        = 'Problema al eliminar campo personalizado';
$lang['email_removed_from_list']                          = 'email eliminado de la lista';
$lang['email_remove_fail']                                = 'email eliminado de la lista';
$lang['staff_mail_lists']                                 = 'Listas de correo del equipo';
$lang['clients_mail_lists']                               = 'Listas de correo de los clientes';
$lang['mail_list_total_imported']                         = 'Correos electrónicos importados totales: %s';
$lang['mail_list_total_duplicate']                        = 'Total de mensajes de email duplicados: %s';
$lang['mail_list_total_failed_to_insert']                 = 'Los correos electrónicos no pudo insertar: %s';
$lang['mail_list_total_invalid']                          = 'Dirección de correo no válida: %s';
$lang['cant_edit_mail_list']                              = 'Usted no puede editar esta lista, esta lista se rellena automáticamente';
$lang['mail_list_add_edit_name']                          = 'Nombre de lista de correo';
$lang['mail_list_add_edit_customfield']                   = 'Añadir campo personalizado';
$lang['mail_lists_view_email_email_heading']              = 'Email';
$lang['mail_lists_view_email_date_heading']               = 'Fecha agregada';
$lang['add_new_email_to']                                 = 'Agregar nuevo email a %s';
$lang['import_emails_to']                                 = 'Importación de los correos electrónicos %s';
$lang['mail_list_new_email_edit_add_label']               = 'Email';
$lang['mail_list_import_file']                            = 'Importar archivo';
$lang['mail_list_available_custom_fields']                = 'Campos personalizados disponibles';
$lang['submit_import_emails']                             = 'Los correos electrónicos de importación';
$lang['btn_import_emails']                                = 'Los correos electrónicos de importación (Excel)';
$lang['btn_add_email_to_list']                            = 'Añadir a esta lista de email';
$lang['mail_lists_dt_list_name']                          = 'Lista de nombres';
$lang['mail_lists_dt_datecreated']                        = 'Fecha de creación';
$lang['mail_lists_dt_creator']                            = 'Crear';
$lang['email_added_to_mail_list_successfully']            = 'Email añadió a la lista';
$lang['email_is_duplicate_mail_list']                     = 'Email ya existe en esta lista';
