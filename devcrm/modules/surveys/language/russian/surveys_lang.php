<?php

# Version 2.3.0

$lang['survey_submit']                                    = 'Отправить';
$lang['new_survey']                                       = 'Новый опрос';
$lang['surveys']                                          = 'Опросы';
$lang['survey']                                           = 'Опрос';
$lang['survey_lowercase']                                 = 'опрос';
$lang['survey_no_mail_lists_selected']                    = 'Списков для рассылки не выбрано';
$lang['survey_send_success_note']                         = 'Все письма (%s) для опроса будут отправлены через CRON';
$lang['survey_result']                                    = 'Результат опроса: %s';
$lang['question_string']                                  = 'Вопрос';
$lang['question_field_string']                            = 'Поле';
$lang['survey_list_view_tooltip']                         = 'Посмотреть опрос';
$lang['survey_list_view_results_tooltip']                 = 'Посмотреть результаты';
$lang['survey_add_edit_subject']                          = 'Тема опроса';
$lang['survey_add_edit_email_description']                = 'Описание опроса (описание в письме)';
$lang['survey_include_survey_link']                       = 'Включить ссылку на опрос в описание';
$lang['survey_available_mail_lists_custom_fields']        = 'Доступные пользовательские поля из списков для рассылок';
$lang['survey_mail_lists_custom_fields_tooltip']          = 'Пользовательские поля могут быть использованы в редакторе письма.';
$lang['survey_add_edit_short_description_view']           = 'Краткое описание опроса (описание на странице)';
$lang['survey_add_edit_from']                             = 'От кого (отображается в письме)';
$lang['survey_add_edit_redirect_url']                     = 'URL перенаправления';
$lang['survey_add_edit_red_url_note']                     = 'Куда пользователь будет перенаправлен, когда закончит опрос (оставьте пустым, если перенаправление не требуется).';
$lang['survey_add_edit_disabled']                         = 'Отключить';
$lang['survey_add_edit_only_for_logged_in']               = 'Только для зарегистрированных участников (сотрудников, клиентов)';
$lang['send_survey_string']                               = 'Рассылка опроса';
$lang['survey_send_mail_list_clients']                    = 'Клиенты';
$lang['survey_send_mail_list_staff']                      = 'Сотрудники';
$lang['survey_send_mail_lists_string']                    = 'Списки для рассылок';
$lang['survey_send_mail_lists_note_logged_in']            = 'Примечание: Если вы отправляете опрос по спискам для рассылок, флажок «только для зарегистрированных участников» должен быть снят.';
$lang['survey_send_string']                               = 'Отправить';
$lang['survey_send_to_total']                             = '%s отправлено';
$lang['survey_send_till_now']                             = 'Пока что';
$lang['survey_send_finished']                             = 'Опрос разослан: %s';
$lang['survey_added_to_queue']                            = 'Рассылка по опросу добавлена в очередь CRON %s';
$lang['survey_questions_string']                          = 'Вопросы';
$lang['survey_insert_field']                              = 'Вставить поле';
$lang['survey_field_checkbox']                            = 'Чекбокс';
$lang['survey_field_radio']                               = 'Радио';
$lang['survey_field_input']                               = 'Поле ввода';
$lang['survey_field_textarea']                            = 'Текстовая область';
$lang['survey_question_required']                         = 'Обязательный';
$lang['survey_question_only_for_preview']                 = 'Только для предпросмотра';
$lang['survey_create_first']                              = 'Сначала вам нужно создать опрос, затем вы сможете вставить вопросы.';
$lang['survey_dt_name']                                   = 'Название';
$lang['survey_dt_total_questions']                        = 'Всего вопросов';
$lang['survey_dt_total_participants']                     = 'Всего участников';
$lang['survey_dt_date_created']                           = 'Дата создания';
$lang['survey_dt_active']                                 = 'Активность';
$lang['survey_text_questions_results']                    = 'Результаты текстовых вопросов';
$lang['survey_view_all_answers']                          = 'Посмотреть все ответы';
$lang['settings_survey_send_emails_per_cron_run']         = 'Сколько писем отправлять в час';
$lang['settings_survey_send_emails_per_cron_run_tooltip'] = 'Этот параметр используется при отправке опросов. CRON отправит указаное число писем по часам. Некоторые хостинг-провайдеры имеют ограничения на отправку писем в час.';
$lang['settings_cron_surveys']                            = 'Опросы';
$lang['survey_no_questions']                              = 'В этот опрос еще не добавлены вопросы.';
$lang['survey_send_to_lists']                             = 'Опрос рассылается по спискам';
$lang['survey_send_notice']                               = 'Письма будут отправляться с помощью задания CRON по часам.';
$lang['survey_customers_all']                             = 'Все клиенты';
$lang['mail_lists']                                       = 'Списки рассылок';
$lang['mail_list']                                        = 'Список рассылок';
$lang['new_mail_list']                                    = 'Новый список рассылок';
$lang['mail_list_lowercase']                              = 'список рассылок';
$lang['custom_field_deleted_success']                     = 'Пользовательское поле удалено';
$lang['custom_field_deleted_fail']                        = 'Проблема с удалением пользовательского поля';
$lang['email_removed_from_list']                          = 'Почтовый адрес удалён из списка';
$lang['email_remove_fail']                                = 'Проблема с удалением почтового адреса из списка';
$lang['staff_mail_lists']                                 = 'Список сотрудников';
$lang['clients_mail_lists']                               = 'Список клиентов';
$lang['mail_list_total_imported']                         = 'Всего импортированных адресов: %s';
$lang['mail_list_total_duplicate']                        = 'Всего дубликатов адресов: %s';
$lang['mail_list_total_failed_to_insert']                 = 'Адресов не удалось добавить: %s';
$lang['mail_list_total_invalid']                          = 'Неверных адресов электронной почты: %s';
$lang['cant_edit_mail_list']                              = 'Вы не можете редактировать этот список, он заполняется автоматически.';
$lang['mail_list_add_edit_name']                          = 'Название списка рассылок';
$lang['mail_list_add_edit_customfield']                   = 'Добавить пользовательское поле';
$lang['mail_lists_view_email_email_heading']              = 'Электронная почта';
$lang['mail_lists_view_email_date_heading']               = 'Дата добавления';
$lang['add_new_email_to']                                 = 'Добавить новый адрес в %s';
$lang['import_emails_to']                                 = 'Импорт адресов в %s';
$lang['mail_list_new_email_edit_add_label']               = 'Электронная почта';
$lang['mail_list_import_file']                            = 'Импортировать файл';
$lang['mail_list_available_custom_fields']                = 'Доступные пользовательские поля';
$lang['submit_import_emails']                             = 'Импорт адресов';
$lang['btn_import_emails']                                = 'Импорт адресов (Excel)';
$lang['btn_add_email_to_list']                            = 'Добавить адрес электронной почты в этот список';
$lang['mail_lists_dt_list_name']                          = 'Имя списка';
$lang['mail_lists_dt_datecreated']                        = 'Дата создания';
$lang['mail_lists_dt_creator']                            = 'Создатель';
$lang['email_added_to_mail_list_successfully']            = 'Электронный адрес добавлен в список';
$lang['email_is_duplicate_mail_list']                     = 'Электронный адрес уже есть в этом списке';
