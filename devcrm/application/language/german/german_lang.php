<?php

# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Name';
$lang['options']              = 'Optionen';
$lang['submit']               = 'Speichern';
$lang['added_successfully']   = 'Erfolgreich hinzugefügt!';
$lang['updated_successfully'] = 'Erfolgreich aktualisiert.';
$lang['edit']                 = 'Bearbeiten';
$lang['add_new']              = 'Neu hinzufügen';
$lang['deleted']              = 'Gelöscht';
$lang['problem_deleting']     = 'Problem beim Löschen';
$lang['is_referenced']        = 'Die ID von %s wird bereits verwendet.';
$lang['close']                = 'Schließen';
$lang['send']                 = 'Senden';
$lang['cancel']               = 'Abbrechen';
$lang['go_back']              = 'Gehe zurück';
$lang['error_uploading_file'] = 'Fehler beim Hochladen der Datei';
$lang['load_more']            = 'Weitere laden';
$lang['cant_delete_default']  = 'Kann den Standard %s nicht löschen';
# Invoice General
$lang['invoice_status_paid']                   = 'Bezahlt';
$lang['invoice_status_unpaid']                 = 'Offen';
$lang['invoice_status_overdue']                = 'Überfällig';
$lang['invoice_status_not_paid_completely']    = 'Teilzahlung eingegangen';
$lang['invoice_pdf_heading']                   = 'Rechnung';
$lang['invoice_table_item_heading']            = 'Artikel';
$lang['invoice_table_quantity_heading']        = 'Menge';
$lang['invoice_table_rate_heading']            = 'Rate';
$lang['invoice_table_tax_heading']             = 'Steuer';
$lang['invoice_table_amount_heading']          = 'Summe';
$lang['invoice_subtotal']                      = 'Zwischensumme';
$lang['invoice_adjustment']                    = 'Anpassung';
$lang['invoice_total']                         = 'Gesamt';
$lang['invoice_bill_to']                       = 'Rechnung für';
$lang['invoice_data_date']                     = 'Rechnungsdatum';
$lang['invoice_data_duedate']                  = 'Fälligkeitsdatum:';
$lang['invoice_received_payments']             = 'Transaktionen';
$lang['invoice_no_payments_found']             = 'Für diese Rechnung wurden keine Zahlungen gefunden';
$lang['invoice_note']                          = 'Notiz:';
$lang['invoice_payments_table_number_heading'] = 'Zahlung #';
$lang['invoice_payments_table_mode_heading']   = 'Zahlungsmethode';
$lang['invoice_payments_table_date_heading']   = 'Datum';
$lang['invoice_payments_table_amount_heading'] = 'Betrag';
# Ankündigungen
$lang['announcement']                 = 'Ankündigung';
$lang['announcement_lowercase']       = $lang['announcement'];
$lang['announcements']                = 'Ankündigungen';
$lang['announcements_lowercase']      = $lang['announcements'];
$lang['new_announcement']             = 'Ankündigung erstellen';
$lang['announcement_name']            = 'Name der Ankündigung';
$lang['announcement_message']         = 'Nachricht';
$lang['announcement_show_to_staff']   = 'Zeige den Mitarbeitern';
$lang['announcement_show_to_clients'] = 'Zeige den Kunden';
$lang['announcement_show_my_name']    = 'Zeige meinen Namen';
# Clients
$lang['clients']                                 = 'Kunden';
$lang['client']                                  = 'Kunde';
$lang['new_client']                              = 'Kunde erstellen';
$lang['client_lowercase']                        = $lang['client'];
$lang['client_firstname']                        = 'Vorname';
$lang['client_lastname']                         = 'Nachname';
$lang['client_email']                            = 'E-Mail';
$lang['client_company']                          = 'Firma';
$lang['client_vat_number']                       = 'Steuernummer';
$lang['client_address']                          = 'Adresse';
$lang['client_city']                             = 'Stadt';
$lang['client_postal_code']                      = 'PLZ';
$lang['client_state']                            = 'Bundesland';
$lang['client_password']                         = 'Passwort';
$lang['client_password_change_populate_note']    = 'Notiz: Wenn dieses Feld ausgefüllt wird, wird das Passwort des Kunden geändert';
$lang['client_password_last_changed']            = 'Passwort zuletzt geändert:';
$lang['login_as_client']                         = 'Login als Kunde';
$lang['client_invoices_tab']                     = 'Rechnungen';
$lang['contracts_invoices_tab']                  = 'Verträge';
$lang['contracts_tickets_tab']                   = 'Tickets';
$lang['contracts_notes_tab']                     = 'Notizen';
$lang['note_description']                        = 'Notiere die Beschreibung';
$lang['client_do_not_send_welcome_email']        = 'Versende keine Willkommens E-Mail';
$lang['clients_notes_table_description_heading'] = 'Beschreibung';
$lang['clients_notes_table_addedfrom_heading']   = 'Hinzugefügt von';
$lang['clients_notes_table_dateadded_heading']   = 'Datum hinzugefügt';
$lang['clients_list_full_name']                  = 'Vollständiger Name';
$lang['clients_list_last_login']                 = 'Letzte Anmeldung';
# Contracts
$lang['contracts']                = 'Verträge';
$lang['contract']                 = 'Vertrag';
$lang['new_contract']             = 'Vertrag erstellen';
$lang['contract_lowercase']       = $lang['contract'];
$lang['contract_start_date']      = 'Vertragsbeginn';
$lang['contract_end_date']        = 'Vertragsende';
$lang['contract_subject']         = 'Vertragsgegenstand';
$lang['contract_description']     = 'Beschreibung';
$lang['contract_subject_tooltip'] = 'Objektname ist für den Kunden ersichtlich.';
$lang['contract_client_string']   = 'Kunde';
$lang['contract_attach']          = 'Dokument anhängen';
$lang['contract_list_client']     = 'Kunde';
$lang['contract_list_subject']    = 'Objekt';
$lang['contract_list_start_date'] = 'Vertragsbeginn';
$lang['contract_list_end_date']   = 'Vertragsende';
# Currencies
$lang['currencies']                    = 'Währungen';
$lang['currency']                      = 'Währung';
$lang['new_currency']                  = 'Währung erstellen';
$lang['currency_lowercase']            = $lang['currency'];
$lang['base_currency_set']             = 'Das ist nun Ihre Standardwährung.';
$lang['make_base_currency']            = 'Verwende die Standardwährung';
$lang['base_currency_string']          = 'Standardwährung';
$lang['currency_list_name']            = 'Name';
$lang['currency_list_symbol']          = 'Symbol';
$lang['currency_add_edit_description'] = 'Währungsname';
$lang['currency_add_edit_rate']        = 'Symbol';
$lang['currency_edit_heading']         = 'Währung bearbeiten';
$lang['currency_add_heading']          = 'Währung hinzufügen';
# Department
$lang['departments']                 = 'Abteilungen';
$lang['department']                  = 'Abteilung';
$lang['new_department']              = 'Abteilung erstellen';
$lang['department_lowercase']        = $lang['department'];
$lang['department_name']             = 'Abteilungsname';
$lang['department_email']            = 'Abteilungs E-Mail';
$lang['department_hide_from_client'] = 'Verbergen vor dem Kunden';
$lang['department_list_name']        = 'Name';
# E-Mail Templates
$lang['email_templates']                        = 'E-Mail Vorlagen';
$lang['email_template']                         = 'E-Mail Vorlage';
$lang['email_template_lowercase']               = $lang['email_template'];
$lang['email_templates_lowercase']              = $lang['email_templates'];
$lang['email_template_ticket_fields_heading']   = 'Tickets';
$lang['email_template_invoices_fields_heading'] = 'Rechnungen';
$lang['email_template_clients_fields_heading']  = 'Kunden';
$lang['template_name']                          = 'Templatename';
$lang['template_subject']                       = 'Betreff';
$lang['template_fromname']                      = 'Von Name';
$lang['template_fromemail']                     = 'Von E-Mail';
$lang['send_as_plain_text']                     = 'Als Klartext senden';
$lang['email_template_disabled']                = 'Deaktiviert';
$lang['email_template_email_message']           = 'E-Mail Nachricht';
$lang['available_merge_fields']                 = 'Verfügbare Platzhalter';
# Home
$lang['dashboard_string']                          = 'Pinnwand';
$lang['home_latest_todos']                         = 'Letzte ToDos';
$lang['home_no_latest_todos']                      = 'Keine ToDos gefunden';
$lang['home_latest_finished_todos']                = 'Zuletzt erledigte ToDos';
$lang['home_no_finished_todos_found']              = 'Keine erledigten ToDos gefunden';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tickets, die auf Antwort warten - Nach Abteilung';
$lang['home_tickets_awaiting_reply_by_status']     = 'Tickets, die auf Antwort warten - Nach Status';
$lang['home_this_week_events']                     = 'Veranstaltungen dieser Woche';
$lang['home_upcoming_events_next_week']            = 'Bevorstehende Veranstaltung nächste Woche';
$lang['home_event_added_by']                       = 'Veranstaltung hinzugefügt durch';
$lang['home_public_event']                         = 'Öffentliche Veranstaltung';
$lang['home_weekly_payment_records']               = 'Wöchentliche Zahlungen';
$lang['home_weekend_ticket_opening_statistics']    = 'Wöchentliches Ticket eröffnet Statistiken';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Was gibt’s Neues?';
$lang['new_post']                                           = 'Post erstellen';
$lang['newsfeed_upload_tooltip']                            = 'Tip: Hier Dateien hochladen …';
$lang['newsfeed_all_departments']                           = 'Alle Abteilungen';
$lang['newsfeed_pin_post']                                  = 'Beitrag anpinnen';
$lang['newsfeed_unpin_post']                                = 'Beitrag nicht mehr anpinnen';
$lang['newsfeed_delete_post']                               = 'Löschen';
$lang['newsfeed_published_post']                            = 'Veröffentlichter Beitrag';
$lang['newsfeed_you_like_this']                             = 'Dir gefällt das';
$lang['newsfeed_like_this']                                 = 'Gefällt mir';
$lang['newsfeed_one_other']                                 = 'einem anderen';
$lang['newsfeed_you']                                       = 'Dir';
$lang['newsfeed_and']                                       = 'und';
$lang['newsfeed_you_and']                                   = 'Dir und';
$lang['newsfeed_like_this_saying']                          = 'gefällt dieser Spruch';
$lang['newsfeed_unlike_this_saying']                        = 'gefällt dieser Spruch nicht';
$lang['newsfeed_show_more_comments']                        = 'Mehr Kommentare anzeigen';
$lang['comment_this_post_placeholder']                      = 'Diesen Post kommentieren..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Kollegen denen dieser Post gefällt';
$lang['newsfeed_comment_likes_modal_heading']               = 'Kollegen denen dieser Kommentar gefällt';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Dieser Post ist nur für folgende Abteilungen sichtbar: %s';
# Invoice Items
$lang['invoice_items']                     = 'Rechnungsartikel';
$lang['invoice_item']                      = 'Rechnungsartikel';
$lang['new_invoice_item']                  = 'Rechnungsartikel erstellen';
$lang['invoice_item_lowercase']            = $lang['invoice_item'];
$lang['invoice_items_list_description']    = 'Beschreibung';
$lang['invoice_items_list_rate']           = 'Rate';
$lang['invoice_item_add_edit_description'] = 'Beschreibung';
$lang['invoice_item_add_edit_rate']        = 'Rate';
$lang['invoice_item_edit_heading']         = 'Bearbeite Artikel';
$lang['invoice_item_add_heading']          = 'Artikel hinzufügen';
# Invoices
$lang['invoices']                                = 'Rechnungen';
$lang['invoice']                                 = 'Rechnung';
$lang['invoice_lowercase']                       = $lang['invoice'];
$lang['create_new_invoice']                      = 'Rechnung erstellen';
$lang['view_invoice']                            = 'Rechnung ansehen';
$lang['invoice_payment_recorded']                = 'Rechnungsbegleichung verzeichnet';
$lang['invoice_payment_record_failed']           = 'Das Verzeichnen der Rechnungsbegleichung ist fehlgeschlagen.';
$lang['invoice_sent_to_client_success']          = 'Die Rechnung wurde erfolgreich an den Kunden versandt.';
$lang['invoice_sent_to_client_fail']             = 'Problem während dem Versenden der Rechnung.';
$lang['invoice_reminder_send_problem']           = 'Problem beim Versenden der Erinnerung der überfälligen Rechnung.';
$lang['invoice_overdue_reminder_sent']           = 'Rechnungs-Überfälligkeitserinnerung erfolgreich versandt.';
$lang['invoice_details']                         = 'Rechnungsdetails';
$lang['invoice_view']                            = 'Rechnung ansehen';
$lang['invoice_select_customer']                 = 'Kunde';
$lang['invoice_add_edit_number']                 = 'Rechnungsnummer';
$lang['invoice_add_edit_date']                   = 'Rechnungsdatum';
$lang['invoice_add_edit_duedate']                = 'Fälligkeitsdatum';
$lang['invoice_add_edit_currency']               = 'Währung';
$lang['invoice_add_edit_client_note']            = 'Kundennotiz';
$lang['invoice_add_edit_admin_note']             = 'Mitarbeiter Notiz';
$lang['invoices_toggle_table_tooltip']           = 'Ganze Tabelle zeigen';
$lang['edit_invoice_tooltip']                    = 'Rechnung bearbeiten';
$lang['delete_invoice_tooltip']                  = 'Rechnung löschen - Alle Zahlungen werden gelöscht.';
$lang['invoice_sent_to_email_tooltip']           = 'Rechnung per E-Mail senden';
$lang['invoice_already_send_to_client_tooltip']  = 'Die Rechnung wurde bereits an den Kunden %s versandt';
$lang['send_overdue_notice_tooltip']             = 'Zahlungserinnerung senden';
$lang['invoice_view_activity_tooltip']           = 'Aktivitätslog';
$lang['invoice_record_payment']                  = 'Zahlungsaufzeichnungen';
$lang['invoice_send_to_client_modal_heading']    = 'Diese Rechnung an den Kunden senden';
$lang['invoice_send_to_client_attach_pdf']       = 'Rechnung an E-Mail anfügen (PDF)';
$lang['invoice_send_to_client_preview_template'] = 'Die E-Mail Vorlage zeigen';
$lang['invoice_dt_table_heading_number']         = 'Rechnung #';
$lang['invoice_dt_table_heading_date']           = 'Datum';
$lang['invoice_dt_table_heading_client']         = 'Kunde';
$lang['invoice_dt_table_heading_duedate']        = 'Fälligkeitsdatum';
$lang['invoice_dt_table_heading_amount']         = 'Betrag';
$lang['invoice_dt_table_heading_status']         = 'Status';
$lang['record_payment_for_invoice']              = 'Eine Zahlung erfassen für';
$lang['record_payment_amount_received']          = 'Erhaltener Betrag';
$lang['record_payment_date']                     = 'Zahlungsdatum';
$lang['record_payment_leave_note']               = 'Eine Notiz hinzufügen';
$lang['invoice_payments_received']               = 'Zahlungen erhalten';
$lang['invoice_record_payment_note_placeholder'] = 'Mitarbeiter Notiz';
$lang['no_payments_found']                       = 'Keine Zahlung für diese Rechnung gefunden';
# Payments
$lang['payments']                             = 'Zahlungen';
$lang['payment']                              = 'Zahlung';
$lang['payment_lowercase']                    = $lang['payment'];
$lang['payments_table_number_heading']        = 'Zahlung #';
$lang['payments_table_invoicenumber_heading'] = 'Rechnung #';
$lang['payments_table_mode_heading']          = 'Zahlungsmethode';
$lang['payments_table_date_heading']          = 'Datum';
$lang['payments_table_amount_heading']        = 'Betrag';
$lang['payments_table_client_heading']        = 'Kunden';
$lang['payment_not_exists']                   = 'Die Zahlung existiert nicht';
$lang['payment_edit_for_invoice']             = 'Zahlung für die Rechnung';
$lang['payment_edit_amount_received']         = 'Betrag erhalten';
$lang['payment_edit_date']                    = 'Zahlungsdatum';
# Knowledge Base
$lang['kb_article_add_edit_subject']   = 'Betreff';
$lang['kb_article_add_edit_group']     = 'Gruppe';
$lang['kb_string']                     = 'Knowledgebase';
$lang['kb_article']                    = 'Artikel';
$lang['kb_article_lowercase']          = $lang['kb_article'];
$lang['kb_article_new_article']        = 'Neuer Artikel';
$lang['kb_article_disabled']           = 'Deaktivieren';
$lang['kb_article_description']        = 'Artikelbeschreibung';
$lang['kb_no_articles_found']          = 'Kein Artikel in der Knowledgebase gefunden';
$lang['kb_dt_article_name']            = 'Artikel Name';
$lang['kb_dt_group_name']              = 'Gruppe';
$lang['new_group']                     = 'Gruppe erstellen';
$lang['kb_group_add_edit_name']        = 'Gruppenname';
$lang['kb_group_add_edit_description'] = 'Kurzbeschreibung';
$lang['kb_group_add_edit_disabled']    = 'Deaktivieren';
$lang['kb_group_add_edit_note']        = 'Hinweis: Alle Artikel in dieser Gruppe werden deaktiviert.';
$lang['group_table_name_heading']      = 'Name';
$lang['group_table_isactive_heading']  = 'Aktivieren';
$lang['kb_no_groups_found']            = 'Keine Knowledgebase gefunden';
$lang['media_files']                   = 'Dateien';
# Payment modes
$lang['new_payment_mode']           = 'Zahlungsoption hinzufügen';
$lang['payment_modes']              = 'Zahlungsoption';
$lang['payment_mode']               = 'Zahlungsoption';
$lang['payment_mode_lowercase']     = $lang['payment_mode'];
$lang['payment_modes_dt_name']      = 'Zahlungsoption Name';
$lang['payment_mode_add_edit_name'] = $lang['payment_modes_dt_name'];
$lang['payment_mode_edit_heading']  = 'Zahlungsoption bearbeiten';
$lang['payment_mode_add_heading']   = 'Neue Zahlungsoption hinzufügen';
# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Neue vordefinierte Antwort';
$lang['predefined_replies']                = 'Vordefinierte Antworten';
$lang['predefined_reply']                  = 'Vordefinierte Antwort';
$lang['predefined_reply_lowercase']        = $lang['predefined_reply'];
$lang['predefined_replies_dt_name']        = 'Name der vordefinierten Antworten';
$lang['predefined_reply_add_edit_name']    = 'Name der vordefinierten Antwort';
$lang['predefined_reply_add_edit_content'] = 'Inhalt der Antwort';
# Ticket Priorities
$lang['new_ticket_priority']           = 'Neue Priorität';
$lang['ticket_priorities']             = 'Ticket Prioritäten';
$lang['ticket_priority']               = 'Ticket Priorität';
$lang['ticket_priority_lowercase']     = $lang['ticket_priority'];
$lang['no_ticket_priorities_found']    = 'Keine Ticket-Prioritäten gefunden.';
$lang['ticket_priority_dt_name']       = 'Ticket-Prioritäten Name';
$lang['ticket_priority_add_edit_name'] = 'Prioritätenname';
# Reports
$lang['kb_reports']                                       = 'Über Knowledgebase Kenntnis berichten';
$lang['sales_reports']                                    = 'Verkaufsberichte';
$lang['reports_choose_kb_group']                          = 'Gruppe auswählen';
$lang['report_kb_yes']                                    = 'Ja';
$lang['report_kb_no']                                     = 'Nein';
$lang['report_kb_no_votes']                               = 'Noch keine Abstimmungen';
$lang['report_this_week_leads_conversions']               = 'Interessenten-Gespräche dieser Woche.';
$lang['report_leads_sources_conversions']                 = 'Quellen';
$lang['report_leads_monthly_conversions']                 = 'Monatlich';
$lang['sales_report_heading']                             = 'Verkaufsberichte';
$lang['report_sales_type_income']                         = 'Gesamteinkommen';
$lang['report_sales_type_customer']                       = 'Kundenbericht';
$lang['report_sales_base_currency_select_explanation']    = 'Es muss eine Währung ausgewählt werden, da es Rechnungen mit verschiedenen Währungen gibt.';
$lang['report_sales_from_date']                           = 'Von Datum';
$lang['report_sales_to_date']                             = 'bis Datum';
$lang['report_sales_months_all_time']                     = 'Gesamter Zeitraum';
$lang['report_sales_months_six_months']                   = 'Letzte 6 Monate';
$lang['report_sales_months_twelve_months']                = 'Letzte 12 Monate';
$lang['reports_sales_generated_report']                   = 'Einen Bericht erstellen';
$lang['reports_sales_dt_customers_client']                = 'Kunde';
$lang['reports_sales_dt_customers_total_invoices']        = 'Gesamtrechnungen';
$lang['reports_sales_dt_items_customers_amount']          = 'Betrag';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Betrag mit Steuer';
# Roles
$lang['new_role']           = 'Rolle hinzufügen';
$lang['all_roles']          = 'Alle Rollen';
$lang['roles']              = 'Mitarbeiter Rollen';
$lang['role']               = 'Rollen';
$lang['role_lowercase']     = $lang['role'];
$lang['roles_total_users']  = 'Gesamtbenutzer: ';
$lang['roles_dt_name']      = 'Rollen Name';
$lang['role_add_edit_name'] = 'Rollen Name';
# Service
$lang['new_service']           = 'Service hinzufügen';
$lang['services']              = 'Service';
$lang['service']               = 'Service';
$lang['service_lowercase']     = $lang['service'];
$lang['services_dt_name']      = 'Servicename';
$lang['service_add_edit_name'] = 'Servicename';
# Settings
$lang['settings']                                                  = 'Einstellungen';
$lang['settings_updated']                                          = 'Einstellungen aktualisiert';
$lang['settings_save']                                             = 'Einstellungen speichern';
$lang['settings_group_general']                                    = 'Allgemein';
$lang['settings_group_localization']                               = 'Lokalisation';
$lang['settings_group_tickets']                                    = 'Tickets';
$lang['settings_group_sales']                                      = 'Finanzen';
$lang['settings_group_email']                                      = 'E-Mail';
$lang['settings_group_clients']                                    = 'Kunden';
$lang['settings_group_newsfeed']                                   = 'Neuigkeiten';
$lang['settings_group_cronjob']                                    = 'Cron Job';
$lang['settings_yes']                                              = 'Ja';
$lang['settings_no']                                               = 'Nein';
$lang['settings_clients_default_theme']                            = 'Standard Kunden Theme';
$lang['settings_clients_allow_registration']                       = 'Kunden können sich registrieren';
$lang['settings_clients_allow_kb_view_without_registration']       = 'Knowledgebase Zugriff ohne Login';
$lang['settings_cron_send_overdue_reminder']                       = 'Erinnerung für rückständige Rechnungen senden.';
$lang['settings_cron_send_overdue_reminder_tooltip']               = 'Eine Überfälligkeits-E-Mail an den Kunden senden, wenn der Status vom Cron Job auf "Überfällig" aktualisiert wurde.';
$lang['automatically_send_invoice_overdue_reminder_after']         = 'Automatisch eine Erinnerung nach (Tagen) senden.';
$lang['automatically_resend_invoice_overdue_reminder_after']       = 'Automatisch eine erneute Erinnerung nach (Tagen) senden.';
$lang['settings_email_host']                                       = 'SMTP Host';
$lang['settings_email_port']                                       = 'SMTP Port';
$lang['settings_email']                                            = 'E-Mail';
$lang['settings_email_password']                                   = 'SMTP Passwort';
$lang['settings_email_charset']                                    = 'E-Mail Charset';
$lang['settings_email_signature']                                  = 'E-Mail Signatur';
$lang['settings_general_company_logo']                             = 'Firmenlogo';
$lang['settings_general_company_logo_tooltip']                     = 'Empfohlene Abmessung: 150 × 34px';
$lang['settings_general_company_remove_logo_tooltip']              = 'Entferne Firmenlogo';
$lang['settings_general_company_name']                             = 'Firmen Name';
$lang['settings_general_company_main_domain']                      = 'Firmen Hauptdomain';
$lang['settings_general_use_knowledgebase']                        = 'Knowledgebase aktivieren';
$lang['settings_general_use_knowledgebase_tooltip']                = 'Wenn diese Optionen aktiviert ist, wird die Knowledgebase auch im Kundenbereich angezeigt.';
$lang['settings_general_tables_limit']                             = 'Tabellen Anzeige Limit';
$lang['settings_general_default_staff_role']                       = 'Standard-Mitarbeiter Rolle';
$lang['settings_general_default_staff_role_tooltip']               = 'Wenn ein neuer Mitarbeiter hinzufügt wird, wird diese Rolle standardmäßig ausgewählt.';
$lang['settings_localization_date_format']                         = 'Datumsformat';
$lang['settings_localization_default_timezone']                    = 'Standard Zeitzone';
$lang['settings_localization_default_language']                    = 'Standard Sprache';
$lang['settings_newsfeed_max_file_upload_post']                    = 'Maximale Dateien zum Upload';
$lang['settings_reminders_contracts']                              = 'Vertragsablauf Erinnerung';
$lang['settings_reminders_contracts_tooltip']                      = 'Vertragsablauf Erinnerung in Tagen';
$lang['settings_tickets_use_services']                             = 'Service aktivieren';
$lang['settings_tickets_max_attachments']                          = 'Maximum an Ticket Befestigungen';
$lang['settings_tickets_allow_departments_access']                 = 'Mitarbeitern den Zugriff nur auf Tickets der Personalabteilungen erlauben';
$lang['settings_tickets_allowed_file_extensions']                  = 'Erlaubte Dateierweiterungen';
$lang['settings_sales_general']                                    = 'Allgemein';
$lang['settings_sales_general_note']                               = 'Allgemeine Einstellungen';
$lang['settings_sales_invoice_prefix']                             = 'Rechnungsnummer Präfix';
$lang['settings_sales_decimal_separator']                          = 'Dezimal Trennzeichen';
$lang['settings_sales_thousand_separator']                         = 'Tausender Trennzeichen';
$lang['settings_sales_currency_placement']                         = 'Währungsplatzierung';
$lang['settings_sales_currency_placement_before']                  = 'Betrag bevor';
$lang['settings_sales_currency_placement_after']                   = 'Betrag nach';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Der Kunde muss eingeloggt sein um Rechnungen anzusehen.';
$lang['settings_sales_next_invoice_number']                        = 'Nächste Rechnungsnummer';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Diesen Bereich auf 1 setzen, wenn von Anfang an gestartet werden soll.';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Rechnungsnummer beim Löschen dekrementieren.';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Rechnungsnummer herabsetzen, wenn die letzte Rechnung gelöscht wurde? Wenn die Option auf JA gesetzt ist und vor dem Löschen die nächste R.Nr. 15 lautet, wird die nächste R.Nr. abgestuft sodass keine Lücke entsteht. Auf NEIN gesetzt, bleibt die Nummer bei 15 stehen.';
$lang['settings_sales_invoice_number_format']                      = 'Rechnungsnummer-Format';
$lang['settings_sales_invoice_number_format_year_based']           = 'Jahres basiert';
$lang['settings_sales_invoice_number_format_number_based']         = 'Nummer basiert auf (000001)';
$lang['settings_sales_company_info_note']                          = 'Diese Information wird auf Rechnungen/Angeboten/Zahlungen und anderen PDF Dokumenten angezeigt, auf denen diese Firmeninformationen notwendig sind';
$lang['settings_sales_company_name']                               = 'Firmenname';
$lang['settings_sales_address']                                    = 'Adresse';
$lang['settings_sales_city']                                       = 'Stadt';
$lang['settings_sales_country_code']                               = 'Ländercode';
$lang['settings_sales_postal_code']                                = 'PLZ';
$lang['settings_sales_phonenumber']                                = 'Telefon';
# Leads
$lang['new_lead']                          = 'Interessent hinzufügen';
$lang['leads']                             = 'Interessenten';
$lang['lead']                              = 'Interessent';
$lang['lead_lowercase']                    = $lang['lead'];
$lang['leads_all']                         = 'Alle';
$lang['leads_canban_notes']                = 'Notizen: %s';
$lang['leads_canban_source']               = 'Quelle: %s';
$lang['lead_new_source']                   = 'Quelle hinzufügen';
$lang['lead_sources']                      = 'Interessenten Quellen';
$lang['lead_source']                       = 'Interessenten Quelle';
$lang['lead_source_lowercase']             = $lang['lead_source'];
$lang['leads_sources_not_found']           = 'Keine Quelle gefunden';
$lang['leads_sources_table_name']          = 'Quellenname';
$lang['leads_source_add_edit_name']        = 'Quellenname';
$lang['lead_new_status']                   = 'Neuer Interessenten Status';
$lang['lead_status']                       = 'Interessenten Status';
$lang['lead_status_lowercase']             = $lang['lead_status'];
$lang['leads_status_table_name']           = 'Statusname';
$lang['leads_status_add_edit_name']        = 'Statusname';
$lang['leads_status_add_edit_order']       = 'Order';
$lang['lead_statuses_not_found']           = 'Kein Interessenten Status gefunden';
$lang['leads_search']                      = 'Suche Interessenten';
$lang['leads_table_total']                 = 'Gesamte Interessenten: %s';
$lang['leads_dt_name']                     = 'Name';
$lang['leads_dt_email']                    = 'E-Mail';
$lang['leads_dt_phonenumber']              = 'Telefon';
$lang['leads_dt_assigned']                 = 'Zugewiesen';
$lang['leads_dt_status']                   = 'Status';
$lang['leads_dt_last_contact']             = 'Letzter Kontakt';
$lang['lead_add_edit_name']                = 'Name';
$lang['lead_add_edit_email']               = 'E-Mail Adresse';
$lang['lead_add_edit_phonenumber']         = 'Telefon';
$lang['lead_add_edit_source']              = 'Quelle';
$lang['lead_add_edit_status']              = 'Interessenten Status';
$lang['lead_add_edit_assigned']            = 'Zugewiesen';
$lang['lead_add_edit_datecontacted']       = 'kontaktiert zum Datum';
$lang['lead_add_edit_contacted_today']     = 'Heute kontaktiert';
$lang['lead_add_edit_activity']            = 'Aktivitätslog';
$lang['lead_add_edit_notes']               = 'Notizen';
$lang['lead_add_edit_add_note']            = 'Notiz hinzufügen';
$lang['lead_not_contacted']                = 'Ich habe diesen Interessent nicht kontaktiert';
$lang['lead_add_edit_contacted_this_lead'] = 'Ich bin mit diesem Interessent in Kontakt getreten.';
# Misc
$lang['access_denied'] = 'Zugriff verweigert';
$lang['prev']          = 'vor';
$lang['next']          = 'zurück';
# Datatables
$lang['dt_paginate_first']    = 'Erste';
$lang['dt_paginate_last']     = 'Letzte';
$lang['dt_paginate_next']     = 'vor';
$lang['dt_paginate_previous'] = 'zurück';
$lang['dt_search']            = 'Suchen';
$lang['dt_zero_records']      = 'Keine passenden Einträge gefunden';
$lang['dt_loading_records']   = 'Lade…';
$lang['dt_length_menu']       = 'Anzahl Datensätze _MENU_ ';
$lang['dt_info_filtered']     = '(gefiltert von _MAX_ total {0})';
$lang['dt_info_empty']        = 'Zeige 0 bis 0 von 0 {0}';
$lang['dt_info']              = 'Zeige _START_ bis _END_ von _TOTAL_ {0}';
$lang['dt_empty_table']       = 'Kein {0} gefunden';
$lang['dt_sort_ascending']    = 'Aktivieren, um Spalte aufsteigend zu sortieren';
$lang['dt_sort_descending']   = 'Aktivieren, um Spalte absteigend zu sortieren';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = 'hat überfällige Rechnungserinnerung gesendet';
# Weekdays
$lang['wd_monday']    = 'Montag';
$lang['wd_tuesday']   = 'Dienstag';
$lang['wd_wednesday'] = 'Mittwoch';
$lang['wd_thursday']  = 'Donnerstag';
$lang['wd_friday']    = 'Freitag';
$lang['wd_saturday']  = 'Samstag';
$lang['wd_sunday']    = 'Sonntag';
# Admin Left Sidebar
$lang['als_dashboard']             = 'Dashboard';
$lang['als_clients']               = 'Kunden';
$lang['als_leads']                 = 'Interessent';
$lang['als_contracts']             = 'Verträge';
$lang['als_sales']                 = 'Vertrieb';
$lang['als_staff']                 = 'Mitarbeiter';
$lang['als_tasks']                 = 'Aufgaben';
$lang['als_kb']                    = 'Knowledgebase';
$lang['als_media']                 = 'Medien';
$lang['als_reports']               = 'Auswertungen';
$lang['als_reports_sales_submenu'] = 'Verkauf';
$lang['als_reports_leads_submenu'] = 'Interessent';
$lang['als_kb_articles_submenu']   = 'Knowledgebase Artikel';
$lang['als_utilities']             = 'Tools';
$lang['als_announcements_submenu'] = 'Ankündigungen';
$lang['als_calendar_submenu']      = 'Kalender';
$lang['als_activity_log_submenu']  = 'Aktivitäten';
# Admin Customizer Sidebar
$lang['acs_ticket_priority_submenu']           = 'Ticket Priorität';
$lang['acs_ticket_statuses_submenu']           = 'Ticket Status';
$lang['acs_ticket_predefined_replies_submenu'] = 'Vordefinierte Antworten';
$lang['acs_ticket_services_submenu']           = 'Services';
$lang['acs_departments']                       = 'Abteilungen';
$lang['acs_leads']                             = 'Interessenten';
$lang['acs_leads_sources_submenu']             = 'Quellen';
$lang['acs_leads_statuses_submenu']            = 'Status';
$lang['acs_sales_taxes_submenu']               = 'Steuern';
$lang['acs_sales_currencies_submenu']          = 'Währungen';
$lang['acs_sales_payment_modes_submenu']       = 'Zahlungsarten';
$lang['acs_email_templates']                   = 'E-Mail Templates';
$lang['acs_roles']                             = 'Rollen';
$lang['acs_settings']                          = 'Einstellungen';
# Tickets
$lang['new_ticket']                                          = 'Ein neues Ticket erstellen';
$lang['tickets']                                             = 'Tickets';
$lang['ticket']                                              = 'Ticket';
$lang['ticket_lowercase']                                    = $lang['ticket'];
$lang['support_tickets']                                     = 'Support Tickets';
$lang['support_ticket']                                      = 'Support Ticket';
$lang['ticket_settings_to']                                  = 'Ticket von';
$lang['ticket_settings_email']                               = 'E-Mail Adresse';
$lang['ticket_settings_departments']                         = 'Abteilung';
$lang['ticket_settings_service']                             = 'Service';
$lang['ticket_settings_priority']                            = 'Priorität';
$lang['ticket_settings_subject']                             = 'Betreff';
$lang['ticket_settings_assign_to']                           = 'Ticket wird bearbeitet von / Zugewiesen an';
$lang['ticket_add_body']                                     = 'Ticket Beschreibung';
$lang['ticket_add_attachments']                              = 'Anlagen';
$lang['ticket_no_reply_yet']                                 = 'Keine Antworten';
$lang['new_ticket_added_successfully']                       = 'Ticket #%s erfolgreich hinzugefügt';
$lang['replied_to_ticket_successfully']                      = 'Antwort zum #%s erfolgreich';
$lang['ticket_settings_updated_successfully']                = 'Ticket Einstellungen aktualisiert';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Ticket Einstellungen aktualisiert - zugewiesen zu %s';
$lang['ticket_dt_subject']                                   = 'Betreff';
$lang['ticket_dt_department']                                = 'Abteilung';
$lang['ticket_dt_service']                                   = 'Service';
$lang['ticket_dt_submitter']                                 = 'Kunde';
$lang['ticket_dt_status']                                    = 'Status';
$lang['ticket_dt_priority']                                  = 'Priorität';
$lang['ticket_dt_last_reply']                                = 'Letzte Antwort';
$lang['ticket_single_add_reply']                             = 'Antwort hinzufügen';
$lang['ticket_single_add_note']                              = 'Notiz hinzufügen';
$lang['ticket_single_other_user_tickets']                    = 'Anderes Ticket';
$lang['ticket_single_settings']                              = 'Einstellungen';
$lang['ticket_single_priority']                              = 'Priorität: %s';
$lang['ticket_single_last_reply']                            = 'Letzte Antwort: %s';
$lang['ticket_single_ticket_note_by']                        = 'Ticket Notiz von %s';
$lang['ticket_single_note_added']                            = 'Notiz hinzugefügt: %s';
$lang['ticket_single_change_status']                         = 'Status ändern';
$lang['ticket_single_assign_to_me_on_update']                = 'Dieses Ticket automatisch mir zuweisen';
$lang['ticket_single_insert_predefined_reply']               = 'Vordefinierte Antwort einfügen';
$lang['ticket_single_insert_knowledge_base_link']            = 'Knowledgebase Link einfügen';
$lang['ticket_single_attachments']                           = 'Anlagen';
$lang['ticket_single_add_response']                          = 'Antwort hinzufügen';
$lang['ticket_single_note_heading']                          = 'Notizen';
$lang['ticket_single_add_note']                              = 'Notiz hinzufügen';
$lang['ticket_settings_none_assigned']                       = 'Keine';
$lang['ticket_status_changed_successfully']                  = 'Ticket Status verändert';
$lang['ticket_status_changed_fail']                          = 'Problem beim Ändern des Status';
$lang['ticket_staff_string']                                 = 'Mitarbeiter';
$lang['ticket_client_string']                                = 'Kunde';
$lang['ticket_posted']                                       = 'Geschrieben am: %s';
$lang['ticket_access_by_department_denied']                  = 'Kein Zugriff auf dieses Ticket. Es gehört zu einer Abteilung, der du nicht zugewiesen bist.';
# Staff
$lang['new_staff']                                     = 'Mitarbeiter hinzufügen';
$lang['staff_members']                                 = 'Alle Mitarbeiter';
$lang['staff_member']                                  = 'Mitarbeiter';
$lang['staff_member_lowercase']                        = $lang['staff_member'];
$lang['staff_profile_updated']                         = 'Profil aktualisiert';
$lang['staff_old_password_incorrect']                  = 'Das alte Passwort ist nicht korrekt.';
$lang['staff_password_changed']                        = 'Passwort wurde geändert';
$lang['staff_problem_changing_password']               = 'Probleme beim Ändern des Passwortes';
$lang['staff_profile_string']                          = 'Profil';
$lang['staff_cant_remove_main_admin']                  = 'Das Löschen des Hauptadmins ist nicht zulässig.';
$lang['staff_cant_remove_yourself_from_admin']         = 'Du kannst dir nicht selbst die Administratorrechte entziehen.';
$lang['staff_dt_name']                                 = 'Voller Name';
$lang['staff_dt_email']                                = 'E-Mail';
$lang['staff_dt_last_Login']                           = 'Letztes Login';
$lang['staff_dt_active']                               = 'Aktiv';
$lang['staff_add_edit_firstname']                      = 'Vorname';
$lang['staff_add_edit_lastname']                       = 'Familienname';
$lang['staff_add_edit_email']                          = 'E-Mail';
$lang['staff_add_edit_phonenumber']                    = 'Telefon';
$lang['staff_add_edit_facebook']                       = 'Facebook';
$lang['staff_add_edit_linkedin']                       = 'LinkedIn';
$lang['staff_add_edit_skype']                          = 'Skype';
$lang['staff_add_edit_departments']                    = 'Abteilungen';
$lang['staff_add_edit_role']                           = 'Rolle';
$lang['staff_add_edit_permissions']                    = 'Berechtigungen';
$lang['staff_add_edit_administrator']                  = 'Administrator';
$lang['staff_add_edit_password']                       = 'Passwort';
$lang['staff_add_edit_password_note']                  = 'Hinweis: Wenn dieses Felder ausgefüllt ist, wird das Passwort des Mitarbeiters geändert.';
$lang['staff_add_edit_password_last_changed']          = 'Passwort zuletzt geändert';
$lang['staff_add_edit_notes']                          = 'Notizen';
$lang['staff_add_edit_note_description']               = 'Notiz Beschreibung';
$lang['staff_notes_table_description_heading']         = 'Notizen';
$lang['staff_notes_table_addedfrom_heading']           = 'Hinzugefügt von';
$lang['staff_notes_table_dateadded_heading']           = 'Datum hinzugefügt';
$lang['staff_admin_profile']                           = 'Dies ist ein Admin Profil';
$lang['staff_profile_notifications']                   = 'Benachrichtigungen';
$lang['staff_profile_departments']                     = 'Abteilungen';
$lang['staff_edit_profile_image']                      = 'Profil Bild';
$lang['staff_edit_profile_your_departments']           = 'Ihre Abteilung';
$lang['staff_edit_profile_change_your_password']       = 'Kennwort ändern';
$lang['staff_edit_profile_change_old_password']        = 'Altes Kennwort';
$lang['staff_edit_profile_change_new_password']        = 'Neues Kennwort';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Neues Kennwort wiederholen';
# Staff Tasks
$lang['new_task']                           = 'Aufgabe erstellen';
$lang['tasks']                              = 'Aufgaben';
$lang['task']                               = 'Aufgabe';
$lang['task_lowercase']                     = $lang['task'];
$lang['comment_string']                     = 'Kommentar';
$lang['task_marked_as_complete']            = 'Aufgabe erledigen';
$lang['task_follower_removed']              = 'Aufgabe: Follower entfernen';
$lang['task_assignee_removed']              = 'Aufgabe: Zuständige Mitarbeiter entfernen';
$lang['task_no_assignees']                  = 'Keine zuständige Mitarbeiter';
$lang['task_no_followers']                  = 'Keine Follower vorhanden';
$lang['task_list_all']                      = 'Alle';
$lang['task_list_not_assigned']             = 'Nicht zugewiesen';
$lang['task_list_duedate_passed']           = 'End-Datum verpasst';
$lang['tasks_dt_name']                      = 'Name';
$lang['task_single_priority']               = 'Priorität';
$lang['task_single_start_date']             = 'Start Datum';
$lang['task_single_due_date']               = 'Deadline';
$lang['task_single_finished']               = 'Abgeschlossen';
$lang['task_single_mark_as_complete']       = 'Alles als erledigt kennzeichnen';
$lang['task_single_edit']                   = 'Bearbeiten';
$lang['task_single_delete']                 = 'Löschen';
$lang['task_single_assignees']              = 'Zugewiesen';
$lang['task_single_assignees_select_title'] = 'Zugewiesen an';
$lang['task_single_followers']              = 'Follower';
$lang['task_single_followers_select_title'] = 'Follower hinzufügen';
$lang['task_single_add_new_comment']        = 'Kommentar hinzufügen';
$lang['task_add_edit_subject']              = 'Betreff';
$lang['task_add_edit_priority']             = 'Priorität';
$lang['task_priority_low']                  = 'Unwichtig';
$lang['task_priority_medium']               = 'Normal';
$lang['task_priority_high']                 = 'Wichtig';
$lang['task_priority_urgent']               = 'Dringend';
$lang['task_add_edit_start_date']           = 'Startdatum';
$lang['task_add_edit_due_date']             = 'Enddatum';
$lang['task_add_edit_description']          = 'Beschreibung';
# Taxes
$lang['new_tax']           = 'Steuersatz hinzufügen';
$lang['taxes']             = 'Steuern';
$lang['tax']               = 'Steuer';
$lang['tax_lowercase']     = $lang['tax'];
$lang['tax_dt_name']       = 'Steuer Bezeichnung';
$lang['tax_dt_rate']       = 'Steuersatz (%)';
$lang['tax_add_edit_name'] = 'Steuerbezeichnung';
$lang['tax_add_edit_rate'] = 'Steuersatz (%)';
$lang['tax_edit_title']    = 'Bearbeite Steuersatz';
$lang['tax_add_title']     = 'Neuen Steuersatz hinzufügen';
# Ticket Statuses
$lang['new_ticket_status']            = 'Ticket Status hinzufügen';
$lang['ticket_statuses']              = 'Ticket Status';
$lang['ticket_status']                = 'Ticket Status';
$lang['ticket_status_lowercase']      = $lang['ticket_status'];
$lang['ticket_statuses_dt_name']      = 'Ticket Status Name';
$lang['no_ticket_statuses_found']     = 'Keine Ticket Status gefunden';
$lang['ticket_statuses_table_total']  = 'Gesamt %s';
$lang['ticket_status_add_edit_name']  = 'Ticket Status Name';
$lang['ticket_status_add_edit_color'] = 'Farbe wählen';
$lang['ticket_status_add_edit_order'] = 'Status Reihenfolge';
# Todos
$lang['new_todo']                  = 'ToDo erstellen';
$lang['my_todos']                  = 'Meinen ToDos';
$lang['todo']                      = 'ToDo';
$lang['todo_lowercase']            = $lang['todo'];
$lang['todo_status_changed']       = 'ToDo Status verändert';
$lang['todo_add_title']            = 'neue ToDos hinzufügen';
$lang['add_new_todo_description']  = 'Beschreibung';
$lang['no_finished_todos_found']   = 'Keine abgeschlossenen ToDos gefunden';
$lang['no_unfinished_todos_found'] = 'Keine ToDos gefunden';
$lang['unfinished_todos_title']    = 'Nicht abgeschlossene ToDos\'n';
$lang['finished_todos_title']      = 'Letzte abgeschlossene ToDos\'n';
# Utilities
$lang['utility_activity_log']                        = 'Aktivitätslog';
$lang['utility_activity_log_filter_by_date']         = 'Filtern nach Datum';
$lang['utility_activity_log_dt_description']         = 'Beschreibung';
$lang['utility_activity_log_dt_date']                = 'Datum';
$lang['utility_activity_log_dt_staff']               = 'Mitarbeiter';
$lang['utility_calendar_new_event_title']            = 'Neuen Termin anlegen';
$lang['utility_calendar_new_event_start_date']       = 'Start Datum';
$lang['utility_calendar_new_event_end_date']         = 'End-Datum';
$lang['utility_calendar_new_event_make_public']      = 'Öffentlicher Termin';
$lang['utility_calendar_event_added_successfully']   = 'Neuer Termin hinzugefügt';
$lang['utility_calendar_event_deleted_successfully'] = 'Termin wurde gelöscht';
$lang['utility_calendar_new_event_placeholder']      = 'Termin Titel';
# Navigation
$lang['nav_notifications']          = 'Benachrichtigung';
$lang['nav_my_profile']             = 'Mein Profil';
$lang['nav_edit_profile']           = 'Profil bearbeiten';
$lang['nav_logout']                 = 'Abmelden';
$lang['nav_no_notifications']       = 'Keine Benachrichtigungen gefunden';
$lang['nav_view_all_notifications'] = 'Alle Benachrichtigungen anzeigen';
$lang['nav_notifications_tooltip']  = 'Benachrichtigung anzeigen';
# Footer
$lang['clients_copyright'] = 'Copyright %s';
# Contracts
$lang['clients_contracts']               = 'Verträge';
$lang['clients_contracts_dt_subject']    = 'Betreff';
$lang['clients_contracts_dt_start_date'] = 'Start Datum';
$lang['clients_contracts_dt_end_date']   = 'End-Datum';
# Home
$lang['clients_quick_invoice_info']           = 'Schnelle Rechnungsinformationen';
$lang['clients_home_currency_select_tooltip'] = 'Es muss eine Währung gewählt werden, da Rechnungen mit verschiedenen Währungen existieren.';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Download';
$lang['clients_my_invoices']               = 'Meine Rechnungen';
$lang['clients_invoice_dt_number']         = 'Rechnung #';
$lang['clients_invoice_dt_date']           = 'Datum';
$lang['clients_invoice_dt_duedate']        = 'End-Datum';
$lang['clients_invoice_dt_amount']         = 'Betrag';
$lang['clients_invoice_dt_status']         = 'Status';
# Profile
$lang['clients_profile_heading'] = 'Profil';
# Used for edit profile and register START
$lang['clients_firstname'] = 'Vorname';
$lang['clients_lastname']  = 'Nachname';
$lang['clients_email']     = 'E-Mail';
$lang['clients_company']   = 'Firma';
$lang['clients_vat']       = 'UsSt.Nr.';
$lang['clients_phone']     = 'Telefonnummer';
$lang['clients_country']   = 'Land';
$lang['clients_city']      = 'Stadt';
$lang['clients_address']   = 'Adresse';
$lang['clients_zip']       = 'PLZ';
$lang['clients_state']     = 'Bundesland';
# Used for edit profile and register END
$lang['clients_register_password']                    = 'Passwort';
$lang['clients_register_password_repeat']             = 'Passwort Wiederholung';
$lang['clients_edit_profile_update_btn']              = 'Aktualisieren';
$lang['clients_edit_profile_change_password_heading'] = 'Passwort ändern';
$lang['clients_edit_profile_old_password']            = 'Altes Passwort';
$lang['clients_edit_profile_new_password']            = 'Neues Passwort';
$lang['clients_edit_profile_new_password_repeat']     = 'Passwort wiederholen';
$lang['clients_edit_profile_change_password_btn']     = 'Passwort ändern';
$lang['clients_profile_last_changed_password']        = 'Letzte Kennwort Änderung %s';
# Knowledge base
$lang['clients_knowledge_base']                    = 'Knowledgebase';
$lang['clients_knowledge_base_articles_not_found'] = 'Keine Knowledgebase Artikel gefunden.';
$lang['clients_knowledge_base_find_useful']        = 'War dieser Artikel hilfreich?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Ja';
$lang['clients_knowledge_base_find_useful_no']     = 'Nein';
$lang['clients_article_only_1_vote_today']         = 'Es kann nur alle 24 Stunden abgestimmt werden';
$lang['clients_article_voted_thanks_for_feedback'] = 'Danke für Ihr Feedback';
# Tickets
$lang['clients_ticket_open_subject']               = 'Ticket Eröffnen';
$lang['clients_ticket_open_departments']           = 'Abteilung';
$lang['clients_tickets_heading']                   = 'Support Tickets';
$lang['clients_ticket_open_service']               = 'Service';
$lang['clients_ticket_open_priority']              = 'Priorität';
$lang['clients_ticket_open_body']                  = 'Ticket Inhalt';
$lang['clients_ticket_attachments']                = 'Anlagen';
$lang['clients_single_ticket_string']              = 'Ticket';
$lang['clients_single_ticket_replied']             = 'Geantwortet: %s';
$lang['clients_single_ticket_information_heading'] = 'Ticket Informationen';
$lang['clients_tickets_dt_number']                 = 'Ticket #';
$lang['clients_tickets_dt_subject']                = 'Betreff';
$lang['clients_tickets_dt_department']             = 'Abteilung';
$lang['clients_tickets_dt_service']                = 'Service';
$lang['clients_tickets_dt_status']                 = 'Status';
$lang['clients_tickets_dt_last_reply']             = 'Letzte Antwort';
$lang['clients_ticket_single_department']          = 'Abteilung: %s';
$lang['clients_ticket_single_submitted']           = 'Zugewiesen: %s';
$lang['clients_ticket_single_status']              = 'Status:';
$lang['clients_ticket_single_priority']            = 'Priorität: %s';
$lang['clients_ticket_single_add_reply_btn']       = 'Antwort hinzufügen';
$lang['clients_ticket_single_add_reply_heading']   = 'Antwort zu diesem Ticket hinzufügen';
# Login
$lang['clients_login_heading_no_register'] = 'Bitte anmelden';
$lang['clients_login_heading_register']    = 'Bitte anmelden oder registrieren';
$lang['clients_login_email']               = 'E-Mail';
$lang['clients_login_password']            = 'Passwort';
$lang['clients_login_remember']            = 'Eingeloggt bleiben';
$lang['clients_login_login_string']        = 'Anmelden';
# Register
$lang['clients_register_string']  = 'Registrieren';
$lang['clients_register_heading'] = 'Registrieren';
# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'Registrieren';
$lang['clients_nav_invoices']  = 'Rechnungen';
$lang['clients_nav_contracts'] = 'Verträge';
$lang['clients_nav_kb']        = 'Knowledgebase';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Abmelden';
# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Zahlungsbeleg';
$lang['payment_for_string']                            = 'Zahlung für';
$lang['payment_date']                                  = 'Zahlungsdatum:';
$lang['payment_view_mode']                             = 'Zahlungsmethode:';
$lang['payment_total_amount']                          = 'Gesamt €';
$lang['payment_table_invoice_number']                  = 'Rechnungsnummer';
$lang['payment_table_invoice_date']                    = 'Rechnungsdatum';
$lang['payment_table_invoice_amount_total']            = 'Rechnungsbetrag';
$lang['payment_table_payment_amount_total']            = 'Zahlungsbetrag';
$lang['payments_table_transaction_id']                 = 'Transaktions-ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token nicht gefunden';
$lang['online_payment_recorded_success']               = 'Zahlung erfolgreich aufgezeichnet';
$lang['online_payment_recorded_success_fail_database'] = 'Die Zahlung war zwar erfolgreich, aber konnte nicht in die Datenbank eingefügt werden, der Administrator sollte kontaktiert werden';
# Leads
$lang['lead_convert_to_client']                = 'Zu einem Kunden umwandeln';
$lang['lead_convert_to_email']                 = 'E-Mail';
$lang['lead_convert_to_client_firstname']      = 'Vorname';
$lang['lead_convert_to_client_lastname']       = 'Nachname';
$lang['lead_email_already_exists']             = 'Interessenten E-Mail existiert bereits bei einem Kunden';
$lang['lead_to_client_base_converted_success'] = 'Interessent erfolgreich in einen Kunden umgewandelt';
$lang['lead_have_client_profile']              = 'Dieser Interessent hat ein Kundenprofil';
$lang['lead_converted_edit_client_profile']    = 'Profil bearbeiten';
# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Rechnung als Kunde zeigen';
$lang['invoice_add_edit_recurring']                                           = 'Wiederkehrende Rechnung?';
$lang['invoice_add_edit_recurring_no']                                        = 'Nein';
$lang['invoice_add_edit_recurring_month']                                     = 'Jeden %s Monat';
$lang['invoice_add_edit_recurring_months']                                    = 'Alle %s Monate';
$lang['invoices_list_all']                                                    = 'Alle';
$lang['invoices_list_not_have_payment']                                       = 'Zu dieser Rechnung ist keine Zahlung verzeichnet.';
$lang['invoices_list_recurring']                                              = 'Wiederkehrende Rechnung';
$lang['invoices_list_made_payment_by']                                        = 'Bezahlung mittels %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Eine wiederkehrende Rechnung nur dann erstellen, wenn die Hauptrechnung beglichen wurde.';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Eine neue Rechnung nur dann erstellen, wenn die Hauptrechnung als bezahlt gekennzeichnet ist? Wenn dieses Feld auf Ja steht und die ausstehende Rechnung nicht den Status bezahlt hat, wird keine neue erstellt.';
$lang['view_invoice_pdf_link_pay']                                            = 'Rechnung bezahlen';
# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bankkonten / Beschreibung';
$lang['payment_mode_add_edit_description_tooltip'] = 'Hier können Bankkonten Informationen definiert werden. Dies wird in der HTML Rechnung angezeigt';
$lang['payment_modes_dt_description']              = 'Bankkonten / Beschreibung';
$lang['payment_modes_add_edit_announcement']       = 'Notiz: Hier gelistete Bezahlmethoden sind offline Typen. Online Bezahlmethoden können in Einstellungen -> Bezahlmethoden definiert werden.';
$lang['payment_mode_add_edit_active']              = 'Aktiv';
$lang['payment_modes_dt_active']                   = 'Aktiv';
# Contracts
$lang['contract_not_found'] = 'Vertrag konnte nicht gefunden werden. Vielleicht wurde er gelöscht, prüfen im Aktivitätslog';
# Settings
$lang['setting_bar_heading']                               = 'Setup';
$lang['settings_group_online_payment_modes']               = 'Payment Getaways';
$lang['settings_paymentmethod_mode_label']                 = 'Label';
$lang['settings_paymentmethod_active']                     = 'Aktiv';
$lang['settings_paymentmethod_currencies']                 = 'Komma separierte Währungen';
$lang['settings_paymentmethod_testing_mode']               = 'Test-Modus aktivieren';
$lang['settings_paymentmethod_paypal_username']            = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']            = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature']           = 'API Signature';
$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Listen-Ergebnisse der Such limitieren auf';
## Clients
$lang['client_phonenumber'] = 'Telefonnummer';
# Main Clients
$lang['clients_register']                          = 'Registrieren';
$lang['clients_profile_updated']                   = 'Das Profil wurde aktualisiert';
$lang['clients_successfully_registered']           = 'Vielen Dank für Ihre Registrierung';
$lang['clients_account_created_but_not_logged_in'] = 'Konto wurde erstellt, aber Sie wurden nicht automatisch eingeloggt. Bitte versuchen Sie sich anzumelden';
# Tickets
$lang['clients_tickets_heading'] = 'Support Tickets';
# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Bezahlung für Rechnung';
$lang['payment_total']       = 'Gesamtsumme: %s';
# Invoice
$lang['invoice_html_online_payment']             = 'Online Bezahlung';
$lang['invoice_html_online_payment_button_text'] = 'Bezahlen';
$lang['invoice_html_payment_modes_not_selected'] = 'Bitte eine Zahlungsart wählen';
$lang['invoice_html_amount_blank']               = 'Die Gesamtsumme kann nicht leer oder Null sein';
$lang['invoice_html_offline_payment']            = 'Zahlungsmethode';
$lang['invoice_html_amount']                     = 'Betrag';

# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility'] = 'Spalten';
$lang['dt_button_reload']            = 'Aktualisieren';
$lang['dt_button_excel']             = 'Excel';
$lang['dt_button_csv']               = 'CSV';
$lang['dt_button_pdf']               = 'PDF';
$lang['dt_button_print']             = 'Drucken';
$lang['is_not_active_export']        = 'Nein';
$lang['is_active_export']            = 'Ja';
# Invoice
$lang['invoice_add_edit_advanced_options']                = 'Erweiterte Optionen';
$lang['invoice_add_edit_allowed_payment_modes']           = 'Erlaubte Zahlungsarten';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Wiederkehrende Rechnungen aus dieser Rechnung';
$lang['invoice_add_edit_no_payment_modes_found']          = 'Keine Zahlungsmodalitäten gefunden';
$lang['invoice_html_total_pay']                           = 'Gesamtsumme: %s';
# E-Mail templates
$lang['email_templates_table_heading_name'] = 'Template Name';
# General
$lang['discount_type']            = 'Rabatt Art';
$lang['discount_type_after_tax']  = 'nach Steuern';
$lang['discount_type_before_tax'] = 'vor Steuern';
$lang['terms_and_conditions']     = 'Allgemeine Geschäftsbedingungen';
$lang['reference_no']             = 'Referenz #';
$lang['no_discount']              = 'Kein Rabatt';
$lang['view_stats_tooltip']       = 'Schnellstatistik anzeigen';
# Clients
$lang['zip_from_date']            = 'Von Datum:';
$lang['zip_to_date']              = 'Bis Datum:';
$lang['client_zip_payments']      = 'ZIP Payments';
$lang['client_zip_invoices']      = 'ZIP Rechnungen';
$lang['client_zip_estimates']     = 'ZIP Angebote';
$lang['client_zip_status']        = 'Status';
$lang['client_zip_status_all']    = 'Alle';
$lang['client_zip_payment_modes'] = 'Zahlung erfolgte mit';
$lang['client_zip_no_data_found'] = 'Keine %s gefunden';
# Payments
$lang['payment_mode']         = 'Zahlungsart';
$lang['payment_view_heading'] = 'Zahlung';
# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Kunde erlauben, den Zahl-Betrag zu bearbeiten (für Online Bezahlungen)';
$lang['settings_delete_only_on_last_invoice']                       = 'Löschen einer Rechnung nur bei der letzten erlauben.';
$lang['settings_sales_estimate_prefix']                             = 'Angebotsnummer Präfix';
$lang['settings_sales_next_estimate_number']                        = 'Nächste Angebot-Nr.';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Das Feld auf 1 setzten, wenn neu angefangen werden soll.';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Herabsetzen der Angebotsnummer beim Löschen';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Soll die Nummer beim Löschen wieder zurückgesetzt werden? z.B. bei gesetzt auf JA: Wird das Angebot 15 gelöscht, ist die nächste Nr. wäre wiederum 15.';
$lang['settings_sales_estimate_number_format']                      = 'Angebots-Nummern Format';
$lang['settings_sales_estimate_number_format_year_based']           = 'Jahresbasiert';
$lang['settings_sales_estimate_number_format_number_based']         = 'Nummern-basiert (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Löschen des Angebotes nur beim letzten möglich';
$lang['settings_send_test_email_heading']                           = 'Test E-Mail senden';
$lang['settings_send_test_email_subheading']                        = 'Eine Test-Mail senden, um sicher zu gehen, dass die SMTP-Einstellungen korrekt sind.';
$lang['settings_send_test_email_string']                            = 'E-Mail Adresse';
$lang['settings_smtp_settings_heading']                             = 'SMTP Einstellungen';
$lang['settings_smtp_settings_subheading']                          = 'Setup Haupt-E-Mail';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Rechnung';
$lang['settings_sales_heading_estimates']                           = 'Angebot';
$lang['settings_sales_cron_invoice_heading']                        = 'Rechnung';
# Tasks
$lang['tasks_dt_datestart'] = 'Start Datum';
# Invoice General
$lang['invoice_discount'] = 'Rabatt';
# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Rechts nach Links)';
$lang['settings_rtl_support_client']                                  = 'RTL Kunden Area (Rechts nach Links)';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Automatische Konvertierung von Angebot zu Rechnung, nachdem der Kunde das Angebot akzeptiert hat.';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Ausschließen von Angeboten mit dem Status Entwurf aus dem Kundencenter.';
# Months
$lang['January']   = 'Januar';
$lang['February']  = 'Februar';
$lang['March']     = 'März';
$lang['April']     = 'April';
$lang['May']       = 'Mai';
$lang['June']      = 'Juni';
$lang['July']      = 'Juli';
$lang['August']    = 'August';
$lang['September'] = 'September';
$lang['October']   = 'Oktober';
$lang['November']  = 'November';
$lang['December']  = 'Dezember';
# Time ago function translate
$lang['time_ago_just_now']  = 'soeben';
$lang['time_ago_minute']    = 'vor weniger als einer Minute';
$lang['time_ago_minutes']   = 'vor %s Minuten';
$lang['time_ago_hour']      = 'vor einer Stunde';
$lang['time_ago_hours']     = 'vor %s Stunden';
$lang['time_ago_yesterday'] = 'gestern';
$lang['time_ago_days']      = 'vor %s Tagen';
$lang['time_ago_week']      = 'vor einer Woche';
$lang['time_ago_weeks']     = 'vor %s Wochen';
$lang['time_ago_month']     = 'vor einem Monat';
$lang['time_ago_months']    = 'vor %s Monaten';
$lang['time_ago_year']      = 'vor einem Jahr';
$lang['time_ago_years']     = 'vor %s Jahren';
# Estimates
$lang['estimates']                                = 'Angebote';
$lang['estimate']                                 = 'Angebot';
$lang['estimate_lowercase']                       = $lang['estimate'];
$lang['create_new_estimate']                      = 'Angebot erstellen';
$lang['view_estimate']                            = 'Angebot anzeigen';
$lang['estimate_sent_to_client_success']          = 'Das Angebot wurde erfolgreich an den Kunden versendet';
$lang['estimate_sent_to_client_fail']             = 'Problem beim Versenden des Angebotes';
$lang['estimate_view']                            = $lang['view_estimate'];
$lang['estimate_select_customer']                 = 'Kunde';
$lang['estimate_add_edit_number']                 = 'Angebots-Nummer';
$lang['estimate_add_edit_date']                   = 'Datum';
$lang['estimate_add_edit_expirydate']             = 'Gültig bis';
$lang['estimate_add_edit_currency']               = 'Währung';
$lang['estimate_add_edit_client_note']            = 'Kunden-Notiz';
$lang['estimate_add_edit_admin_note']             = 'Admin Notiz';
$lang['estimates_toggle_table_tooltip']           = 'Gesamte Tabelle anzeigen';
$lang['estimate_add_edit_advanced_options']       = 'Erweiterte Optionen';
$lang['estimate_to']                              = 'Angebot für';
$lang['estimates_list_all']                       = 'Alle';
$lang['estimate_invoiced_date']                   = 'Angebot berechnet am %s';
$lang['edit_estimate_tooltip']                    = 'Angebot bearbeiten';
$lang['delete_estimate_tooltip']                  = 'Angebot löschen';
$lang['estimate_sent_to_email_tooltip']           = 'Per E-Mail senden';
$lang['estimate_already_send_to_client_tooltip']  = 'Dieses Angebot wurde bereits per E-Mail versendet %s';
$lang['estimate_view_activity_tooltip']           = 'Aktivitätslog';
$lang['estimate_send_to_client_modal_heading']    = 'Dieses Angebot per E-Mail senden';
$lang['estimate_send_to_client_attach_pdf']       = 'Angebot als PDF anfügen';
$lang['estimate_send_to_client_preview_template'] = 'Vorschau der E-Mail Vorlage';
$lang['estimate_dt_table_heading_number']         = 'Angebot #';
$lang['estimate_dt_table_heading_date']           = 'Datum';
$lang['estimate_dt_table_heading_client']         = 'Kunde';
$lang['estimate_dt_table_heading_expirydate']     = 'Gültig bis';
$lang['estimate_dt_table_heading_amount']         = 'Betrag';
$lang['estimate_dt_table_heading_status']         = 'Status';
$lang['estimate_convert_to_invoice']              = 'In Rechnung umwandeln';
# Clients
$lang['client_payments_tab'] = 'Zahlungen';
# Estimate General
$lang['estimate_pdf_heading']            = 'Angebot';
$lang['estimate_table_item_heading']     = 'Artikel';
$lang['estimate_table_quantity_heading'] = 'Menge';
$lang['estimate_table_rate_heading']     = 'Preis';
$lang['estimate_table_tax_heading']      = 'Steuer';
$lang['estimate_table_amount_heading']   = 'Gesamt';
$lang['estimate_subtotal']               = 'Netto Gesamt';
$lang['estimate_adjustment']             = 'Sonstige Kosten';
$lang['estimate_discount']               = 'Rabatt';
$lang['estimate_total']                  = 'Kosten Gesamt';
$lang['estimate_to']                     = 'Angebot für';
$lang['estimate_data_date']              = 'Datum';
$lang['estimate_data_expiry_date']       = 'Gültig bis';
$lang['estimate_note']                   = 'Bemerkungen:';
$lang['estimate_status_draft']           = 'Entwurf';
$lang['estimate_status_sent']            = 'Versendet';
$lang['estimate_status_declined']        = 'Abgelehnt';
$lang['estimate_status_accepted']        = 'Angenommen';
$lang['estimate_status_expired']         = 'Abgelaufen';
$lang['estimate_note']                   = 'Notizen:';

## Clients
$lang['clients_estimate_dt_number']             = 'Angebot #';
$lang['clients_estimate_dt_date']               = 'Datum';
$lang['clients_estimate_dt_duedate']            = 'Gültig bis';
$lang['clients_estimate_dt_amount']             = 'Betrag';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Angebot';
$lang['clients_decline_estimate']               = 'Ablehnen';
$lang['clients_accept_estimate']                = 'Akzeptieren';
$lang['clients_my_estimates']                   = 'Angebot';
$lang['clients_estimate_invoiced_successfully'] = 'Angebot akzeptiert. Die Rechnung wird erstellt.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Vielen Dank, dass Sie unser Angebot angenommen haben.';
$lang['clients_estimate_declined']              = 'Das Angebot wurde abgelehnt. Bitte teilen Sie uns mit, wie wir Ihnen helfen können!';
$lang['clients_estimate_failed_action']         = 'Fehler beim Verändern des Angebotes.';
$lang['client_add_edit_profile']                = 'Profil';

# Version 1.0.3
# Custom Fields
$lang['custom_field']                          = 'Benutzerdefiniertes Feld';
$lang['custom_field_lowercase']                = $lang['custom_field'];
$lang['custom_fields']                         = 'Benutzerdefinierte Felder';
$lang['new_custom_field']                      = 'Benutzerdefiniertes Feld hinzufügen';
$lang['custom_field_name']                     = 'Feld Name';
$lang['custom_field_add_edit_type']            = 'Art';
$lang['custom_field_add_edit_belongs_top']     = 'Zuordnung des Feldes';
$lang['custom_field_add_edit_options']         = 'Optionen';
$lang['custom_field_add_edit_options_tooltip'] = 'Nur für Auswahlfeld-Typen verwenden. Das Feld befüllen, indem die Optionen durch Komma getrennt werden. z.B. Apfel, Orange, Banane';
$lang['custom_field_add_edit_order']           = 'Reihenfolge';
$lang['custom_field_dt_field_to']              = 'Gehört zu';
$lang['custom_field_dt_field_name']            = 'Name';
$lang['custom_field_dt_field_type']            = 'Typ';
$lang['custom_field_add_edit_active']          = 'Aktiv';
$lang['custom_field_add_edit_disabled']        = 'Deaktiviert';
# Ticket replies
$lang['ticket_reply'] = 'Ticket Antworten';
# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Benutzerdefiniertes Feld';
# Contracts
$lang['contract_types']           = 'Vertragsarten';
$lang['contract_type']            = 'Vertragsart';
$lang['new_contract_type']        = 'Vertragsart hinzufügen';
$lang['contract_type_lowercase']  = $lang['contract_type'];
$lang['contract_type_name']       = 'Name';
$lang['contract_types_list_name'] = 'Vertragsarten';
# Customizer Menu
$lang['acs_contracts']      = 'Vertragsarten';
$lang['acs_contract_types'] = 'Vertragsarten Typen';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Lange Beschreibung';
# Customers
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Ausgaben';
$lang['customers_summary']                 = 'Kunden Zusammenfassung';
$lang['customers_summary_active']          = 'Aktiviert';
$lang['customers_summary_inactive']        = 'Deaktiviert';
$lang['customers_summary_logged_in_today'] = 'Heute angemeldet';
# Authentication
$lang['admin_auth_forgot_password_email']     = 'Benutzername';
$lang['admin_auth_forgot_password_heading']   = 'Kennwort vergessen';
$lang['admin_auth_login_heading']             = 'Anmelden';
$lang['admin_auth_login_email']               = 'E-Mail';
$lang['admin_auth_login_password']            = 'Passwort';
$lang['admin_auth_login_remember_me']         = 'Angemeldet bleiben';
$lang['admin_auth_login_button']              = 'Anmelden';
$lang['admin_auth_login_fp']                  = 'Passwort vergessen?';
$lang['admin_auth_reset_password_heading']    = 'Passwort zurücksetzen';
$lang['admin_auth_reset_password']            = 'Passwort';
$lang['admin_auth_reset_password_repeat']     = 'Passwort wiederholen';
$lang['admin_auth_invalid_email_or_password'] = 'Falscher Benutzer oder Kennwort';
$lang['admin_auth_inactive_account']          = 'Deaktivierter Account';
# Calender
$lang['calendar_estimate']          = 'Angebot';
$lang['calendar_invoice']           = 'Rechnung';
$lang['calendar_contract']          = 'Vertrag';
$lang['calendar_customer_reminder'] = 'Kunden Erinnerung';
$lang['calendar_event']             = 'Termin';
$lang['calendar_task']              = 'Aufgabe';
# Leads
$lang['lead_edit_delete_tooltip'] = 'Interessent löschen';
$lang['lead_attachments']         = 'Anhänge';
# Admin Customizer Sidebar
$lang['acs_finance'] = 'Finanzen';
# Settings
$lang['settings_show_sale_agent_on_invoices']       = 'Verkaufs-Mitarbeiter auf Rechnung anzeigen';
$lang['settings_show_sale_agent_on_estimates']      = 'Verkaufs-Mitarbeiter auf Angebot anzeigen';
$lang['settings_predefined_predefined_term']        = 'Vordefinierte AGB';
$lang['settings_predefined_clientnote']             = 'Vordefinierte Kunden Notiz';
$lang['settings_custom_pdf_logo_image_url']         = 'Benutzerdefiniertes PDF-Firmenlogo';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Achtung mit png-Bildern die Transparenz haben, je nach verwendeter php-imagick oder php-gd Versionen. Ein Update von php-imagick und das Deaktivieren von php-gd kann helfen. Wenn leer gelassen, wird das hochgeladene Logo verwendet.';
# General
$lang['sale_agent_string']               = 'Mitarbeiter';
$lang['amount_display_in_base_currency'] = 'Der Betrag wird in Ihrer Hauptwährung angezeigt';
# Leads
$lang['leads_summary'] = 'Interessenten Zusammenfassung';
# Contracts
$lang['contract_value']                       = 'Vertragswert';
$lang['contract_trash']                       = 'Papierkorb';
$lang['contracts_view_trash']                 = 'Papierkorb anzeigen';
$lang['contracts_view_all']                   = 'Alle';
$lang['contracts_view_exclude_trashed']       = 'Gelöschten Verträge ausschließen';
$lang['contract_value_tooltip']               = 'Einen Vertragswert hinzufügen. Er wird in der Standard Währung ausgewiesen.';
$lang['contract_trash_tooltip']               = 'Wenn ein Vertrag in den Papierkorb verschoben wird, wird er nicht im Kundencenter gezeigt, nicht in Statistiken einbezogen, und ebenfalls standardmäßig nicht gezeigt, wenn alle Verträge anzeigt werden.';
$lang['contract_renew_heading']               = 'Vertrag verlängern';
$lang['contract_summary_heading']             = 'Verträge Zusammenfassung';
$lang['contract_summary_expired']             = 'Abgelaufen';
$lang['contract_summary_active']              = 'Aktiv';
$lang['contract_summary_about_to_expire']     = 'Bald Auslaufend';
$lang['contract_summary_recently_added']      = 'Vertragsverlängerungen';
$lang['contract_summary_trash']               = 'Papierkorb';
$lang['contract_summary_by_type']             = 'Verträge nach Typ';
$lang['contract_summary_by_type_value']       = 'Vertragsart mit Volumen';
$lang['contract_renewed_successfully']        = 'Vertrag erfolgreich verlängert';
$lang['contract_renewed_fail']                = 'Problem beim Aktualisieren des Vertrages. Bitte den Admin kontakten.';
$lang['no_contract_renewals_found']           = 'Keine Vertragsverlängerungen für diesen Vertrag gefunden';
$lang['no_contract_renewals_history_heading'] = 'Vertragsverlängerungen';
$lang['contract_renewed_by']                  = '%s hat den Vertrag verlängert.';
$lang['contract_renewal_deleted']             = 'Vertragsverlängerungen erfolgreich gelöscht';
$lang['contract_renewal_delete_fail']         = 'Fehler beim Löschen des Vertragsverlängerung. Bitte den Administrator kontaktieren.';
$lang['contract_renewal_new_value']           = 'Neuer Vertragswert %s';
$lang['contract_renewal_old_value']           = 'Alter Vertragswert %s';
$lang['contract_renewal_new_start_date']      = 'Neuer Vertragsbeginn: %s';
$lang['contract_renewal_old_start_date']      = 'Alter Vertragsbeginn war am %s';
$lang['contract_renewal_new_end_date']        = 'Neues Vertragsende %s';
$lang['contract_renewal_old_end_date']        = 'Altes Vertragsende war der %s';
$lang['contract_attachment']                  = 'Anhänge';
# Admin Aside Menu
$lang['als_expenses']           = 'Ausgaben';
$lang['als_reports_expenses']   = 'Ausgaben';
$lang['als_expenses_vs_income'] = 'Ausgaben vs Einnahmen';
# Invoices
$lang['invoice_attach_file']           = 'Anlage hinzufügen';
$lang['invoice_mark_as_sent']          = 'Als versendet markieren';
$lang['invoice_marked_as_sent']        = 'Die Rechnung wurde erfolgreich als versendet markiert';
$lang['invoice_marked_as_sent_failed'] = 'Fehler beim Setzen auf versendet';
# Payments
$lang['payment_transaction_id'] = 'Transaktions-ID';
# Settings Menu
$lang['acs_expense_categories'] = 'Ausgaben Kategorien';
# Expenses
$lang['expense_category']                             = 'Ausgaben Kategorie';
$lang['expense_category_lowercase']                   = $lang['expense_category'];
$lang['new_expense']                                  = 'Ausgaben erfassen';
$lang['expense_add_edit_name']                        = 'Kategorie Name';
$lang['expense_add_edit_description']                 = 'Kategorie Beschreibung';
$lang['expense_categories']                           = 'Ausgaben Kategorie';
$lang['new_expense_category']                         = 'Kategorie erstellen';
$lang['dt_expense_description']                       = 'Beschreibung';
$lang['expense']                                      = 'Betriebsausgabe';
$lang['expenses']                                     = 'Ausgaben';
$lang['expense_lowercase']                            = $lang['expense'];
$lang['expense_add_edit_customer']                    = 'Kunde';
$lang['expense_add_edit_note']                        = 'Notizen';
$lang['expense_add_edit_date']                        = 'Fällig am';
$lang['expense_add_edit_amount']                      = 'Betrag';
$lang['expense_add_edit_billable']                    = 'In Rechnung stellen';
$lang['expense_add_edit_attach_receipt']              = 'Rechnung anfügen';
$lang['expense_add_edit_reference_no']                = 'Referenz #';
$lang['expense_receipt']                              = 'Ausgaben Eingang';
$lang['expense_receipt_lowercase']                    = $lang['expense_receipt'];
$lang['expense_dt_table_heading_category']            = 'Kategorie';
$lang['expense_dt_table_heading_amount']              = 'Menge';
$lang['expense_dt_table_heading_date']                = 'Datum';
$lang['expense_dt_table_heading_reference_no']        = 'Referenz #';
$lang['expense_dt_table_heading_customer']            = 'Kunde';
$lang['expense_dt_table_heading_payment_mode']        = 'Zahlungsart';
$lang['expense_converted_to_invoice']                 = 'Ausgaben erfolgreich in eine Rechnung umgewandelt.';
$lang['expense_converted_to_invoice_fail']            = 'Fehler beim Konvertieren der Ausgabe zu Rechnung. Bitte Errorlogs prüfen.';
$lang['expense_copy_success']                         = 'Ausgaben erfolgreich kopiert.';
$lang['expense_copy_fail']                            = 'Fehler beim Kopieren der Ausgabe. Bitte die Pflichtfelder prüfen und noch einmal versuchen';
$lang['expenses_list_all']                            = 'Alle';
$lang['expenses_list_billable']                       = 'Abrechenbar';
$lang['expenses_list_non_billable']                   = 'Nicht Abrechenbar';
$lang['expenses_list_invoiced']                       = 'In Rechnung gestellt';
$lang['expenses_list_unbilled']                       = 'Nicht abgerechnet';
$lang['expenses_list_recurring']                      = 'Wiederkehrend';
$lang['expense_invoice_delete_not_allowed']           = 'Diese Kosten können nicht gelöscht werden. Der Aufwand wird bereits in Rechnung gestellt';
$lang['expense_convert_to_invoice']                   = 'In Rechnung umwandeln';
$lang['expense_edit']                                 = 'Betriebsausgabe bearbeiten';
$lang['expense_delete']                               = 'Löschen';
$lang['expense_copy']                                 = 'Kopieren';
$lang['expense_invoice_not_created']                  = 'Rechnung nicht erstellt';
$lang['expense_billed']                               = 'Abgerechnet';
$lang['expense_not_billed']                           = 'Nicht Abgerechnet';
$lang['expense_customer']                             = 'Kunde';
$lang['expense_note']                                 = 'Notizen:';
$lang['expense_date']                                 = 'Datum:';
$lang['expense_ref_noe']                              = 'Ref #:';
$lang['expense_amount']                               = 'Betrag:';
$lang['expense_recurring_indicator']                  = 'Wiederkehrend';
$lang['expense_already_invoiced']                     = 'Dieser Aufwand ist bereits in Rechnung gestellt';
$lang['expense_recurring_auto_create_invoice']        = 'Auto Rechnung erstellen';
$lang['expense_recurring_send_custom_on_renew']       = 'Die Rechnung an die Kunden E-Mail senden, wenn sich die Kosten wiederholen';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Wenn diese Option aktiviert wird, wird die Rechnung für den Kunden automatisch erstellt, wenn die Kosten erneuert werden.';
$lang['expenses_yearly_by_categories']                = 'Ausgaben jährlich nach Kategorien';
$lang['total_expenses_for']                           = 'Gesamtaufwendungen für'; // year
$lang['expenses_report_for']                          = 'Die Aufwendungen für'; // year
# Custom fields
$lang['custom_field_required']    = 'Pflichtfeld';
$lang['custom_field_show_on_pdf'] = 'Zeige PDF';
$lang['custom_field_leads']       = 'Interessenten';
$lang['custom_field_customers']   = 'Kunden';
$lang['custom_field_staff']       = 'Mitarbeiter';
$lang['custom_field_contracts']   = 'Verträge';
$lang['custom_field_tasks']       = 'Aufgaben';
$lang['custom_field_expenses']    = 'Expenses';
$lang['custom_field_invoice']     = 'Rechnungen';
$lang['custom_field_estimate']    = 'Angebot';
# Tickets
$lang['ticket_single_private_staff_notes'] = 'Private Mitarbeiter Notizen';
//TODO goon
# Business News
$lang['business_news'] = 'News';
# Navigation
$lang['nav_todo_items'] = 'ToDos';
# Clients
# Contracts
$lang['clients_contracts_type'] = 'Vertragsart';

# Version 1.0.5
# General
$lang['no_tax']                              = 'keine Steuer';
$lang['numbers_not_formatted_while_editing'] = 'Der Wert im Feld ist nicht formatiert während des Bearbeitens und sollte hier auch nicht formatiert werden.';
# Contracts
$lang['contracts_view_expired']         = 'Ausgelaufen';
$lang['contracts_view_without_dateend'] = 'Verträge ohne Enddatum';
# E-Mail Templates
$lang['email_template_contracts_fields_heading'] = 'Verträge';
# Invoices General
$lang['invoice_estimate_general_options'] = 'Generelle Optionen';
$lang['invoice_table_item_description']   = 'Beschreibung';
$lang['invoice_recurring_indicator']      = 'Wiederholung';
# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Angebot erfolgreich zu Rechnung konvertiert';
$lang['estimate_table_item_description']          = 'Beschreibung';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Die Basiswährung kann nicht gelöscht werden. Zuerst bitte eine neue Standardwährung definieren.';
$lang['invoice_copy']              = 'Rechnung kopieren';
$lang['invoice_copy_success']      = 'Rechnung erfolgreich kopiert';
$lang['invoice_copy_fail']         = 'Kopieren der Rechnung fehlgeschlagen';
$lang['invoice_due_after_help']    = 'Auf Null setzen, um Kalkulation zu vermeiden';
$lang['show_shipping_on_invoice']  = 'Versandadresse in Rechnung zeigen';
# Estimates
$lang['show_shipping_on_estimate']         = 'Versandadresse in Angebot zeigen';
$lang['is_invoiced_estimate_delete_error'] = 'Dieses Angebot wurde bereits in eine Rechnung gewandelt. Es kann daher nicht gelöscht werden.';
# Customers & Invoices / Estimates
$lang['ship_to']                            = 'Versenden an';
$lang['customer_profile_details']           = 'Kunden Details';
$lang['billing_shipping']                   = 'Rechnung & Versand';
$lang['billing_address']                    = 'Rechnungsadresse';
$lang['shipping_address']                   = 'Versandadresse';
$lang['billing_street']                     = 'Straße';
$lang['billing_city']                       = 'Stadt';
$lang['billing_state']                      = 'Bundesland';
$lang['billing_zip']                        = 'PLZ';
$lang['billing_country']                    = 'Land';
$lang['shipping_street']                    = 'Straße';
$lang['shipping_city']                      = 'Stadt';
$lang['shipping_state']                     = 'Bundesland';
$lang['shipping_zip']                       = 'PLZ';
$lang['shipping_country']                   = 'Land';
$lang['get_shipping_from_customer_profile'] = 'Versanddetails von Kundenprofil holen';
# Customer
$lang['customer_default_currency']                             = 'Währung';
$lang['customer_update_address_info_on_invoices']              = 'Die Versand-/Rechnungsadresse Info auf allen bereits angelegten Rechnungen/Angeboten aktualisieren';
$lang['customer_update_address_info_on_invoices_help']         = 'Wenn dieses Feld aktiviert ist, werden die Felder der Versand- und Rechnungsadressen in allen Rechnungen und Angeboten aktualisiert. Notiz: Rechnungen mit dem Status bezahlt betrifft das nicht.';
$lang['setup_google_api_key_customer_map']                     = 'Google API Key erstellen, um Kundenkarte zu sehen';
$lang['customer_attachments_file']                             = 'Datei';
$lang['client_send_set_password_email']                        = 'Kennwort per E-Mail versenden';
$lang['customer_billing_same_as_profile']                      = 'Gleich wie Kunden Info';
$lang['customer_billing_copy']                                 = 'Rechnungsadresse kopieren';
$lang['customer_map']                                          = 'Karte';
$lang['set_password_email_sent_to_client']                     = 'E-Mail zum Passwort-Setzen erfolgreich an den Kunden versendet';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil wurde aktualisiert und E-Mail zum Passwort Setzen erfolgreich an Kunde versendet';
$lang['customer_attachments']                                  = 'Dateien';
$lang['customer_longitude']                                    = 'Längengrad (Google Maps)';
$lang['customer_latitude']                                     = 'Breitengrad (Google Maps)';
# Authentication
$lang['admin_auth_set_password']         = 'Passwort';
$lang['admin_auth_set_password_repeat']  = 'Passwort wiederholen';
$lang['admin_auth_set_password_heading'] = 'Passwort festlegen';
# General
$lang['apply']                         = 'Anwenden';
$lang['department_calendar_id']        = 'Google Calendar ID';
$lang['localization_default_language'] = 'Standard Sprache';
$lang['system_default_string']         = 'System Standard';
$lang['advanced_options']              = 'Erweiterte Optionen';
# Expenses
$lang['expense_list_invoice']  = 'In Rechnung gestellt';
$lang['expense_list_billed']   = 'Abgerechnet';
$lang['expense_list_unbilled'] = 'Nicht abgerechnet';
# Leads
$lang['lead_merge_custom_field']          = 'Als benutzerdefiniertes Feld zusammenführen';
$lang['lead_merge_custom_field_existing'] = 'Mit existierendem Datenbank Feld zusammenführen';
$lang['lead_dont_merge_custom_field']     = 'Nicht zusammenführen';
$lang['lost_leads']                       = 'Verlorene Interessenten';
$lang['junk_leads']                       = 'Müll Interessenten';
$lang['lead_mark_as_lost']                = 'Als verloren markieren';
$lang['lead_unmark_as_lost']              = 'Interessent als nicht mehr verloren markieren';
$lang['lead_marked_as_lost']              = 'Interessent erfolgreich als verloren markiert';
$lang['lead_unmarked_as_lost']            = 'Interessent erfolgreich als nicht verloren markiert';
$lang['leads_status_color']               = 'Farbe';
$lang['lead_mark_as_junk']                = 'Als Müll markieren';
$lang['lead_unmark_as_junk']              = 'Interessent als KEIN Müll markieren';
$lang['lead_marked_as_junk']              = 'Interessent erfolgreich als Müll markiert.';
$lang['lead_unmarked_as_junk']            = 'Interessent erfolgreich als KEIN Müll markiert.';
$lang['lead_not_found']                   = 'Interessent nicht gefunden';
$lang['lead_lost']                        = 'Verloren';
$lang['lead_junk']                        = 'Junk';
$lang['leads_not_assigned']               = 'Nicht zugewiesen';
# Contacts
$lang['contract_not_visible_to_client'] = 'Für den Kunden ausblenden';
$lang['contract_edit_overview']         = 'Vertragsdetails';
$lang['contract_attachments']           = 'Dokumente/Anlagen';
# Tasks
$lang['task_view_make_public']     = 'Öffentliche Aufgabe';
$lang['task_is_private']           = 'Private Aufgabe';
$lang['task_finished']             = 'Beendet';
$lang['task_single_related']       = 'Zugehörig';
$lang['task_unmark_as_complete']   = 'Als Unfertig markieren';
$lang['task_unmarked_as_complete'] = 'Aufgabe wurde der Komplett-Status entzogen';
$lang['task_relation']             = 'Zugehörig';
$lang['task_public']               = 'Teamfreigabe';
$lang['task_public_help']          = 'Wenn diese Aufgabe öffentlich gesetzt ist, wird sie für alle Mitarbeiter sichtbar. Andernfalls nur für zugewiesene Mitarbeiter, Follower, dem Ersteller und dem Administrator';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Ausgabe von PDF Dokumenten im Admin Bereich in Kundensprache';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Wenn diese Option auf JA gesetzt ist und zB. die Standardsprache english ist, der Kunde aber deutsch eingestellt hat, wird das PDF in deutsch erstellt.';
$lang['settings_default_tax']                                                = 'Standard Steuer';
$lang['setup_calendar_by_departments']                                       = 'Erstelle Kalender pro Abteilung';
$lang['settings_calendar']                                                   = 'Kalender';
$lang['settings_sales_invoice_due_after']                                    = 'Rechnung überfällig nach (Tagen)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Dies ist der Haupt-Firmen Kalender. Alle Termine dieses Kalender werden gezeigt. Wenn einen Kalender pro Abteilung erstellt werden soll, kann in der Abteilung die Google Calendar ID definiert werden.';
$lang['show_on_calendar']                                                    = 'Auf dem Kalender anzeigen';
$lang['show_invoices_on_calendar']                                           = 'Rechnungen';
$lang['show_estimates_on_calendar']                                          = 'Angebote';
$lang['show_contracts_on_calendar']                                          = 'Verträge';
$lang['show_tasks_on_calendar']                                              = 'Aufgaben';
$lang['show_customer_reminders_on_calendar']                                 = 'Customer Reminders';
# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Benutzerdefinierte Felder in Kundenprofil kopieren';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Wenn eines der folgenden benutzerdefinierten Felder noch nicht beim Kunden existiert, wird es automatisch erstellt. Andernfalls wird nur der Wert vom Interessenten Profil kopiert.';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Kunden';
$lang['leads_email_integration_folder_no_encryption']                = 'Keine Verschlüsselung';
$lang['leads_email_integration']                                     = 'E-Mail Integration';
$lang['leads_email_active']                                          = 'Aktiv';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'E-Mail Adresse (Login)';
$lang['leads_email_integration_password']                            = 'Passwort';
$lang['leads_email_integration_default_source']                      = 'Standard Quelle';
$lang['leads_email_integration_check_every']                         = 'Alle (Minuten) prüfen';
$lang['leads_email_integration_default_assigned']                    = 'Verantwortlich für den neuen Interessenten';
$lang['leads_email_encryption']                                      = 'Verschlüsselung';
$lang['leads_email_integration_updated']                             = 'E-Mail Integration aktualisiert';
$lang['leads_email_integration_default_status']                      = 'Standard Status';
$lang['leads_email_integration_folder']                              = 'Ordner';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Informieren, wenn Interessent importiert ist';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Nur nicht veröffentlichte E-Mails wählen';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Das Skript wird automatisch die E-Mails nach dem Markieren als geöffnet markieren. Verwenden, um zu verhindern dass alle Mails immer und immer wieder markiert werden. Es ist nicht empfohlen, diese Option zu deaktivieren wenn eine Menge Mails und Weiterleitungen an die Mail vorhanden sind, die für Interessenten definiert sind.';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Benachrichtigen, wenn Interessenten E-Mail mehrfach versendet wurde.';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Verbindung';
$lang['lead_email_connection_ok']                                    = 'IMAP Verbindung hergestellt';
$lang['lead_email_connection_not_ok']                                = 'IMAP Verbindung nicht okay';
$lang['lead_email_activity']                                         = 'E-Mail Aktivität';
$lang['leads_email_integration_notify_roles']                        = 'zu informierende Rollen';
$lang['leads_email_integration_notify_staff']                        = 'zu informierende Mitarbeiter';
$lang['lead_public']                                                 = 'Öffentlich';
# Knowledge Base
$lang['kb_group_color'] = 'Farbe';
$lang['kb_group_order'] = 'Bestellung';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Massen PDF Exporter';
$lang['bulk_export_pdf_payments']      = 'Bezahlungen';
$lang['bulk_export_pdf_estimates']     = 'Angebote';
$lang['bulk_export_pdf_invoices']      = 'Rechnungen';
$lang['bulk_pdf_export_button']        = 'Export';
$lang['bulk_pdf_export_select_type']   = 'Typ wählen';
$lang['no_data_found_bulk_pdf_export'] = 'Keine Daten zum Exportieren gefunden';
$lang['bulk_export_status_all']        = 'Alle';
$lang['bulk_export_status']            = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Bezahlungen via';
$lang['bulk_export_include_tag']       = 'Schlagwort inkludieren';
$lang['bulk_export_include_tag_help']  = 'z.B. Original oder Kopie. Das Schlagwort wird in der PDF ausgegeben. Empfohlen: Nur einen Tag verwenden';
# Backup


# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Vorschlag';
$lang['clients_nav_support']   = 'Support';
# General
$lang['more']            = 'Mehr';
$lang['add_item']        = 'Hinzufügen';
$lang['goto_admin_area'] = 'Zum Backend gehen';
$lang['delete']          = '%s löschen';
$lang['welcome_top']     = 'Hallo %s!';
# Customers
$lang['customer_permissions']         = 'Berechtigungen';
$lang['customer_permission_invoice']  = 'Rechnungen';
$lang['customer_permission_estimate'] = 'Angebot';
$lang['customer_permission_proposal'] = 'Vorschlag';
$lang['customer_permission_contract'] = 'Verträge';
$lang['customer_permission_support']  = 'Support';
#Tasks
$lang['task_related_to'] = 'Zuordnung';
# Send file
$lang['custom_file_fail_send']    = 'Datei konnte nicht gesendet werden';
$lang['custom_file_success_send'] = 'Datei wurde erfolgreich gesendet an %s';
$lang['send_file_subject']        = 'E-Mail Betreff';
$lang['send_file_email']          = 'E-Mail Adresse';
$lang['send_file_message']        = 'Nachricht';
$lang['send_file']                = 'Datei senden';
$lang['add_checklist_item']       = 'Checklisten Eintrag';
$lang['task_checklist_items']     = 'Checklisten Einträge';
# Import
$lang['default_pass_clients_import'] = 'Kennwort für alle importierten Benutzer';
$lang['simulate_import']             = 'Import simulieren';
$lang['import_upload_failed']        = 'Hochladen fehlgeschlagen';
$lang['import_total_imported']       = 'Gesamt importiert: %s';
$lang['import_leads']                = 'Interessenten importieren';
$lang['import_customers']            = 'Kunden importieren';
$lang['choose_csv_file']             = 'Eine CSV Datei wählen';
$lang['import']                      = 'Importieren';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Quelle';
# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Vorschlag';
# Invoices
$lang['delete_invoice'] = 'Rechnung löschen';
# Calendar
$lang['items']      = 'Vorlagen';
$lang['support']    = 'Support';
$lang['new_ticket'] = 'Ticket erstellen';
# Reminders
$lang['calendar_lead_reminder']  = 'Interessenten Erinnerung';
$lang['lead_set_reminder_title'] = 'Interessenten Erinnerung hinzufügen';
$lang['set_reminder_tooltip']    = 'Mit dieser Option nichts über Ihren Kunden vergessen.';
$lang['client_reminders_tab']    = 'Erinnerungen';
$lang['leads_reminders_tab']     = 'Erinnerungen';
# Tickets
$lang['delete_ticket_reply']  = 'Antwort löschen';
$lang['ticket_priority_edit'] = 'Priorität bearbeiten';
$lang['ticket_priority_add']  = 'Priorität hinzufügen';
$lang['ticket_status_edit']   = 'Ticket Status bearbeiten';
$lang['ticket_service_edit']  = 'Ticket Service bearbeiten';
$lang['edit_department']      = 'Abteilung bearbeiten';
# Expenses
$lang['edit_expense_category'] = 'Betriebskosten Kategorie bearbeiten';
# Settings
$lang['customer_default_country']                                 = 'Standard Land';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Eingeloggt Status für Kunde erzwingen, um Angebot einzusehen.';
$lang['set_reminder']                                             = 'Erinnerung erstellen';
$lang['set_reminder_date']                                        = 'Datum der Erinnerung';
$lang['reminder_description']                                     = 'Beschreibung definieren';
$lang['reminder_notify_me_by_email']                              = 'Für diese Erinnerung auch eine E-Mail senden';
$lang['reminder_added_successfully']                              = 'Erinnerung erfolgreich zugefügt. Du wirst rechtzeitig informiert.';
$lang['reminder_description']                                     = 'Beschreibung';
$lang['reminder_date']                                            = 'Datum';
$lang['reminder_staff']                                           = 'Erinnern';
$lang['reminder_is_notified']                                     = 'Wurde erinnert?';
$lang['reminder_is_notified_boolean_no']                          = 'Nein';
$lang['reminder_is_notified_boolean_yes']                         = 'Ja';
$lang['reminder_set_to']                                          = 'Erinnerung an';
$lang['reminder_deleted']                                         = 'Erinnerung erfolgreich gelöscht';
$lang['reminder_failed_to_delete']                                = 'Fehler beim Löschen der Erinnerung';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Zeige Rechnung / Angebot Status in PDF';
$lang['email_piping_default_priority']                            = 'Standard Priorität bei Tickets per E-Mail';
$lang['show_lead_reminders_on_calendar']                          = 'Interessent Erinnerung';
$lang['tickets_piping']                                           = 'Tickets per E-Mail';
$lang['email_piping_only_replies']                                = 'Nur Antworten per E-Mail erlauben';
$lang['email_piping_only_registered']                             = 'Tickets per E-Mail nur für registrierte Nutzer';

# Estimates
$lang['view_estimate_as_client']         = 'Kostenvoranschlag als Kunde anzeigen';
$lang['estimate_mark_as']                = 'Als %s markieren';
$lang['estimate_status_changed_success'] = 'Kostenvoranschlag Status verändert!';
$lang['estimate_status_changed_fail']    = 'Fehler beim Ändern des Status';
# Angebot
$lang['proposal_to']                            = 'Firma / Name';
$lang['proposal_date']                          = 'Datum';
$lang['proposal_address']                       = 'Adresse';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'E-Mail';
$lang['proposal_date_created']                  = 'Erstelldatum';
$lang['proposal_open_till']                     = 'Offen bis';
$lang['proposal_status_open']                   = 'Offen';
$lang['proposal_status_accepted']               = 'Akzeptiert';
$lang['proposal_status_declined']               = 'Abgelehnt';
$lang['proposal_status_sent']                   = 'Gesendet';
$lang['proposal_expired']                       = 'Abgelaufen';
$lang['proposal_subject']                       = 'Thema/Betreff';
$lang['proposal_total']                         = 'Gesamtsumme';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'Alle';
$lang['proposals_leads_related']                = 'Mit Interessent verbunden';
$lang['proposals_customers_related']            = 'Mit Kunden verbunden';
$lang['proposal_related']                       = 'Verbunden';
$lang['proposal_for_lead']                      = 'Interessent';
$lang['proposal_for_customer']                  = 'Kunden';
$lang['proposal']                               = 'Vorschlag';
$lang['proposal_lowercase']                     = $lang['proposal'];
$lang['proposals']                              = 'Vorschlag';
$lang['proposals_lowercase']                    = $lang['proposals'];
$lang['new_proposal']                           = 'Vorschlag erstellen';
$lang['proposal_currency']                      = 'Währung';
$lang['proposal_allow_comments']                = 'Kommentare erlauben';
$lang['proposal_allow_comments_help']           = 'Wenn aktiviert, kann der Kunde den Vorschlag kommentieren';
$lang['proposal_edit']                          = 'Bearbeiten';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Per E-Mail senden';
$lang['proposal_send_to_email_title']           = 'Angebot per E-Mail senden';
$lang['proposal_attach_pdf']                    = 'PDF anfügen';
$lang['proposal_preview_template']              = 'Vorschau des Templates';
$lang['proposal_view']                          = 'Angebot anzeigen';
$lang['proposal_copy']                          = 'Kopieren';
$lang['proposal_delete']                        = 'Löschen';
$lang['proposal_to']                            = 'Für';
$lang['proposal_add_comment']                   = 'Kommentar hinzufügen';
$lang['proposal_sent_to_email_success']         = 'Angebot erfolgreich per E-Mail versendet';
$lang['proposal_sent_to_email_fail']            = 'Fehler beim Versenden des Angebotes';
$lang['proposal_copy_fail']                     = 'Fehler beim Kopieren des Angebot';
$lang['proposal_copy_success']                  = 'Angebot erfolgreich kopiert';
$lang['proposal_status_changed_success']        = 'Angebot Status erfolgreich verändert';
$lang['proposal_status_changed_fail']           = 'Fehler beim Ändern des Status beim Angebot';
$lang['proposal_assigned']                      = 'Zugewiesen';
$lang['proposal_comments']                      = 'Kommentar';
$lang['proposal_convert']                       = 'Umwandeln';
$lang['proposal_convert_estimate']              = 'Angebot';
$lang['proposal_convert_invoice']               = 'Rechnung';
$lang['proposal_convert_to_estimate']           = 'In Angebot umwandeln';
$lang['proposal_convert_to_invoice']            = 'In Rechnung umwandeln';
$lang['proposal_convert_to_lead_disabled_help'] = 'Der Interessent muss zuerst in einen Kunden umgewandelt werden - %s';
$lang['proposal_convert_not_related_help']      = 'Der Vorschlag muss zu einem Kunden gehören, um ihn zu %s zu wandeln.';
$lang['proposal_converted_to_estimate_success'] = 'Angebot erfolgreich zu einem Kostenvoranschlag umgewandelt';
$lang['proposal_converted_to_invoice_success']  = 'Angebot erfolgreich zu einer Rechnung umgewandelt';
$lang['proposal_converted_to_estimate_fail']    = 'Angebot nicht erfolgreich zu einem Kostenvoranschlag umgewandelt';
$lang['proposal_converted_to_invoice_fail']     = 'Angebot nicht erfolgreich zu einer Rechnung umgewandelt';
# Angebot - view proposal template
$lang['proposal_total_info']   = 'Gesamt %s';
$lang['proposal_accept_info']  = 'Akzeptiert';
$lang['proposal_decline_info'] = 'Abgelehnt';
$lang['proposal_pdf_info']     = 'PDF';
# Customers Portal
$lang['customer_reset_action']            = 'Zurücksetzen';
$lang['customer_reset_password_heading']  = 'Kennwort zurücksetzen';
$lang['customer_forgot_password_heading'] = 'Passwort vergessen';
$lang['customer_forgot_password']         = 'Passwort vergessen?';
$lang['customer_reset_password']          = 'Passwort';
$lang['customer_reset_password_repeat']   = 'Wiederhole Passwort';
$lang['customer_forgot_password_email']   = 'E-Mail Address';
$lang['customer_forgot_password_submit']  = 'Absenden';
$lang['customer_ticket_subject']          = 'Betreff';
# E-Mail templates
$lang['email_template_proposals_fields_heading'] = 'Vorschlag';
# Tasks
$lang['add_task_attachments']  = 'Anlage';
$lang['task_view_attachments'] = 'Anhänge';
$lang['task_view_description'] = 'Beschreibung';
# Customer Groups
$lang['customer_group_add_heading']      = 'Neue Kundengruppe hinzufügen';
$lang['customer_group_edit_heading']     = 'Kundengruppe bearbeiten';
$lang['new_customer_group']              = 'Kundengruppe hinzufügen';
$lang['customer_group_name']             = 'Name';
$lang['customer_groups']                 = 'Gruppe';
$lang['customer_group']                  = 'Kunden Gruppe';
$lang['customer_group_lowercase']        = $lang['customer_group'];
$lang['customer_have_invoices_by']       = 'Enthält Rechnungen mit Status %s';
$lang['customer_have_estimates_by']      = 'Enthält Angebote mit Status %s';
$lang['customer_have_contracts_by_type'] = 'Hat Verträge vom Typ %s';
# Custom fields
$lang['custom_field_show_on_table']              = 'In Tabelle anzeigen';
$lang['custom_field_show_on_client_portal']      = 'Im Frontend anzeigen';
$lang['custom_field_show_on_client_portal_help'] = 'Wenn das Feld aktiviert ist, wird es auch in Tabellen angezeigt';
$lang['custom_field_visibility']                 = 'Sichtbarkeit';

# Knowledge Base
$lang['view_articles_list']     = 'Artikel ansehen';
$lang['view_articles_list_all'] = 'Alle Artikel';
$lang['als_all_articles']       = 'Alle Artikel';
$lang['als_kb_groups']          = 'Gruppen';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filter';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'Spam Filter erstellen';
$lang['spam_filter_blocked_senders']  = 'Blockierte Sender';
$lang['spam_filter_blocked_subjects'] = 'Blockierte Betreffzeilen';
$lang['spam_filter_blocked_phrases']  = 'Blockierte Wortphrasen';
$lang['spam_filter_content']          = 'Inhalt';
$lang['spamfilter_edit_heading']      = 'Spam Filter bearbeiten';
$lang['spamfilter_add_heading']       = 'Spam Filter zufügen';
$lang['spamfilter_type']              = 'Typ';
$lang['spamfilter_type_subject']      = 'Betreff';
$lang['spamfilter_type_sender']       = 'Sender';
$lang['spamfilter_type_phrase']       = 'Phrase';
# Tickets
$lang['block_sender']                = 'Absender blockieren';
$lang['sender_blocked']              = 'Absender blockiert';
$lang['sender_blocked_successfully'] = 'Absender erfolgreich blockiert';
$lang['ticket_date_created']         = 'Erstelldatum';
#KB
$lang['edit_kb_group'] = 'Gruppe bearbeiten';
# Leads
$lang['edit_source'] = 'Quelle bearbeiten';
$lang['edit_status'] = 'Status bearbeiten';
# Contacts
$lang['contract_type_edit'] = 'Vertragstyp bearbeiten';
# Reports
$lang['report_by_customer_groups'] = 'Gesamtumsatz durch Kundengruppe';
#Utilities
$lang['ticket_pipe_log']      = 'Ticket per E-Mails Log';
$lang['ticket_pipe_name']     = 'Von';
$lang['ticket_pipe_email_to'] = 'An';
$lang['ticket_pipe_email']    = 'via E-Mail';
$lang['ticket_pipe_subject']  = 'Betreff';
$lang['ticket_pipe_message']  = 'Nachricht';
$lang['ticket_pipe_date']     = 'Datum';
$lang['ticket_pipe_status']   = 'Status';
# Home
$lang['home_latest_activity']   = 'Letzte Aufgaben';
$lang['home_my_tasks']          = 'Meine Aufgaben';
$lang['home_my_todo_items']     = 'Meine ToDos';
$lang['home_widget_view_all']   = 'Alle anzeigen';
$lang['home_stats_full_report'] = 'Komplette Aufzeichnung';
# Validation
$lang['form_validation_required']    = 'Das {field} Feld ist ein Pflichtfeld.';
$lang['form_validation_valid_email'] = 'Das {field} muss eine E-Mailadresse sein.';
$lang['form_validation_matches']     = 'Das {field} das Feld stimmt nicht mit {param} überein.';
$lang['form_validation_is_unique']   = 'Das {field} muss ein eindeutiger Wert sein.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event']                                                = 'Aufgabe startet heute - %s …';
$lang['not_event_public']                                         = 'Team Aufgabe startet heute - %s …';
$lang['not_contract_expiry_reminder']                             = 'Vertragsauslauf Erinnerung- %s …';
$lang['not_recurring_expense_cron_activity_heading']              = 'Einmalaufwendungen Cron-Job Aktivität';
$lang['not_recurring_invoices_cron_activity_heading']             = 'Wiederholungsrechnungen Cron Auftragsaktivität';
$lang['not_recurring_total_renewed']                              = 'Insgesamt erneuert: %s';
$lang['not_recurring_expenses_action_taken_from']                 = 'Aktion aus wiederkehrenden Kosten übernommen';
$lang['not_invoice_created']                                      = 'Rechnung erstellt:';
$lang['not_invoice_renewed']                                      = 'Erneuere Rechnung:';
$lang['not_expense_renewed']                                      = 'Erneuere Ausgaben:';
$lang['not_invoice_sent_to_customer']                             = 'Rechnung an den Kunden gesendet: %s';
$lang['not_invoice_sent_yes']                                     = 'Ja';
$lang['not_invoice_sent_not']                                     = 'Nein';
$lang['not_action_taken_from_recurring_invoice']                  = 'Aktion aus wiederkehrenden Rechnung genommen:';
$lang['not_new_reminder_for']                                     = 'Neue Erinnerung für %s';
$lang['not_received_one_or_more_messages_lead']                   = 'Eine weitere E-Mail-Nachricht vom Interessenten Kontakt empfangen';
$lang['not_received_lead_imported_email_integration']             = 'Interessenten Importiert aus E-Mail Migration';
$lang['not_lead_imported_attachment']                             = 'Anhang aus E-Mail importiert';
$lang['not_estimate_status_change']                               = 'Anhang aus E-Mail importiert';
$lang['not_estimate_status_updated']                              = 'Kostenvoranschlag aktualisiert: Von <b>%s</b> zu <b>%s</b>';
$lang['not_assigned_lead_to_you']                                 = 'hat dir einen Interessent %s zugewiesen';
$lang['not_lead_activity_assigned_to']                            = '%s zugewiesen an %s';
$lang['not_lead_activity_attachment_deleted']                     = 'Anlage löschen';
$lang['not_lead_activity_status_updated']                         = '%s aktualisiere Interessenten Status %s zu %s';
$lang['not_lead_activity_contacted']                              = '%s Interessent kontaktiert %s';
$lang['not_lead_activity_created']                                = '%s erstelle Interessent';
$lang['not_lead_activity_marked_lost']                            = 'Als verloren markieren';
$lang['not_lead_activity_unmarked_lost']                          = 'Nicht als verloren markieren';
$lang['not_lead_activity_marked_junk']                            = 'Als Spam markieren';
$lang['not_lead_activity_unmarked_junk']                          = 'Nicht als Spam markieren';
$lang['not_lead_activity_added_attachment']                       = 'Anlage hinzufügen';
$lang['not_lead_activity_converted_email']                        = 'Interessenten E-Mail geändert. Vorherige war: %s und wurde dem Kunden mit der Mail: %s hinzugefügt';
$lang['not_lead_activity_converted']                              = '%s konvertiere diesen Interessenten zum Kunden';
$lang['not_liked_your_post']                                      = '%s gefällt dein Eintrag %s …';
$lang['not_commented_your_post']                                  = '%s hat deinen Eintrag kommentiert %s …';
$lang['not_liked_your_comment']                                   = '%s Gefällt dein Kommentar %s …';
$lang['not_proposal_assigned_to_you']                             = 'Vorschlag zugewiesen an - %s …';
$lang['not_proposal_comment_from_client']                         = 'Neuer Kommentar des Kunden zu Ihrem Kostenvoranschlag %s …';
$lang['not_proposal_proposal_accepted']                           = 'Vorschlag akzeptiert - %s';
$lang['not_proposal_proposal_declined']                           = 'Vorschlag abgelehnt - %s';
$lang['not_task_added_you_as_follower']                           = 'hat dich als Follower zu einer Aufgabe hinzugefügt - %s …';
$lang['not_task_added_someone_as_follower']                       = '%s als Follower zur Aufgabe %s hinzugefügt …';
$lang['not_task_added_himself_as_follower']                       = 'hat sich als Follower zur Aufgabe %s hinzugefügt…';
$lang['not_task_assigned_to_you']                                 = 'hat dich zu einer Aufgabe %s hinzugefügt …';
$lang['not_task_assigned_someone']                                = 'hat %s zu Aufgabe %s hinzugefügt …';
$lang['not_task_will_do_user']                                    = 'erledigt Aufgabe %s …';
$lang['not_task_new_attachment']                                  = 'Neuer Anhang hinzugefügt';
$lang['not_task_marked_as_complete']                              = 'markierte Aufgabe %s als erledigt';
$lang['not_task_unmarked_as_complete']                            = 'markierte Aufgabe %s als nicht erledigt';
$lang['not_ticket_assigned_to_you']                               = 'hat dir das Ticket zugewiesenen - %s …';
$lang['not_ticket_reassigned_to_you']                             = 'hat dir das Ticket nicht zugewiesenen - %s …';
$lang['not_estimate_customer_accepted']                           = 'Glückwunsch! Der Kunde hat das Angebot %s akzeptiert!';
$lang['not_estimate_customer_declined']                           = 'Der Kunde hat das Angebot %s abgelehnt.';
$lang['estimate_activity_converted']                              = 'hat das Angebot in eine Rechnung umgewandelt.<br /> %s';
$lang['estimate_activity_created']                                = 'hat das Angebot erstellt';
$lang['invoice_estimate_activity_removed_item']                   = 'hat den Posten <b>%s</b> entfernt';
$lang['estimate_activity_number_changed']                         = 'Angebots-Nummer gewechselt von <b>%s</b> zu <b>%s</b>';
$lang['invoice_activity_number_changed']                          = 'Rechnungsnummer gewechselt von  %s zu <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'hat die Kurzbeschreibung von <b>%s</b> zu <b>%s</b> aktualisiert';
$lang['invoice_estimate_activity_updated_item_long_description']  = 'hat die Beschreibung von <b>%s</b> zu <b>%s</b> aktualisiert';
$lang['invoice_estimate_activity_updated_item_rate']              = 'hat den Preis von <b>%s</b> auf <b>%s</b> aktualisiert';
$lang['invoice_estimate_activity_updated_qty_item']               = 'hat die Anzahl des Postens <b>%s</b> von <b>%s</b> auf <b>%s</b> geändert';
$lang['invoice_estimate_activity_added_item']                     = 'hat neue Posten <b>%s</b> hinzugefügt';
$lang['invoice_estimate_activity_sent_to_client']                 = 'hat Angebot an Kunden verschickt';
$lang['estimate_activity_client_accepted_and_converted']          = 'Kunde hat das Angebot angenommen. Es wurde eine Rechnung %s erstellt.';
$lang['estimate_activity_client_accepted']                        = 'Kunde hat das Angebot angenommen';
$lang['estimate_activity_client_declined']                        = 'Kunde hat das Angebot nicht angenommen';
$lang['estimate_activity_marked']                                 = 'Das Angebot wurde als %s markiert';
$lang['invoice_activity_status_updated']                          = 'hat den Status der Rechnung von %s zu %s aktualisiert';
$lang['invoice_activity_created']                                 = 'hat eine neue Rechnung erstellt';
$lang['invoice_activity_from_expense']                            = 'hat das Angebot in eine Rechnung umgewandelt';
$lang['invoice_activity_recurring_created']                       = '[Wiederkehrende] Rechnung erstellt von CRON';
$lang['invoice_activity_recurring_from_expense_created']          = '[Rechnung von Kostenvoranschlag] Rechnung erstellt von CRON';
$lang['invoice_activity_sent_to_client_cron']                     = 'Rechnung an den Kunden gesendet von CRON';
$lang['invoice_activity_sent_to_client']                          = 'hat die Rechnung an Kunden gesendet';
$lang['invoice_activity_marked_as_sent']                          = 'hat Rechnung als versendet markiert';
$lang['invoice_activity_payment_deleted']                         = 'hat die Zahlung von Rechnung gelöscht. Zahlung #%s, Gesamt: %s';
$lang['invoice_activity_payment_made_by_client']                  = 'Kunde hat eine Zahlung über <b>%s</b> - %s gemacht';
$lang['invoice_activity_payment_made_by_staff']                   = 'hat eine Zahlung von insgesamt <b>%s</b> - %s eingetragen';
$lang['invoice_activity_added_attachment']                        = 'hat eine Anlage angefügt';
# Navigation
$lang['top_search_placeholder'] = 'Suchen …';
# Staff
$lang['staff_profile_inactive_account'] = 'Dieses Mitarbeiterkonto ist deaktiviert';
# Estimates
$lang['copy_estimate']                = 'Angebot kopieren';
$lang['estimate_copied_successfully'] = 'Angebot erfolgreich kopiert';
$lang['estimate_copied_fail']         = 'Fehler beim Kopieren des Angebotes';
# Tasks
$lang['tasks_view_assigned_to_user'] = 'Mir zugeordnete Aufgaben';
$lang['tasks_view_follower_by_user'] = 'Aufgaben denen ich folge';
$lang['no_tasks_found']              = 'Keine Aufgaben gefunden';
# Leads
$lang['leads_dt_datecreated']       = 'Erstellt';
$lang['leads_sort_by']              = 'Nach sortieren';
$lang['leads_sort_by_datecreated']  = 'Erstellt am';
$lang['leads_sort_by_kanban_order'] = 'Kanban Sortierung';
# Authentication
$lang['check_email_for_resetting_password'] = 'Überprüfe deine Mail für weitere Instruktionen zum Rücksetzen des Passwortes';
$lang['inactive_account']                   = 'Inaktiver Account';
$lang['error_setting_new_password_key']     = 'Fehler beim Setzen des neuen Passwortes';
$lang['password_reset_message']             = 'Dein Passwort wurde zurück gesetzt. Bitte jetzt einloggen!';
$lang['password_reset_message_fail']        = 'Fehler beim Rücksetzen des Passwortes. Bitte erneut versuchen.';
$lang['password_reset_key_expired']         = 'Passwortschlüssel ist abgelaufen oder der Nutzer ist ungültig';
$lang['auth_reset_pass_email_not_found']    = 'E-Mail nicht gefunden';
$lang['auth_reset_password_submit']         = 'Passwort zurücksetzen';
# Settings
$lang['settings_amount_to_words']          = 'Wortausgabe';
$lang['settings_amount_to_words_desc']     = 'Der Gesamtbetrag wird in Worten auf der Rechnung/dem Angebot ausgegeben';
$lang['settings_amount_to_words_enabled']  = 'Aktivieren';
$lang['settings_total_to_words_lowercase'] = 'Wortausgabe in Kleinbuchstaben';
$lang['settings_show_tax_per_item']        = 'Steuer pro Posten (Rechnungen/Angebote) anzeigen';
# Reports
$lang['report_sales_months_three_months'] = 'letzten 3 Monate';
$lang['report_invoice_number']            = 'Rechnung #';
$lang['report_invoice_customer']          = 'Kunde';
$lang['report_invoice_date']              = 'Datum';
$lang['report_invoice_duedate']           = 'Fällig am';
$lang['report_invoice_amount']            = 'Betrag';
$lang['report_invoice_amount_with_tax']   = 'Betrag mit Steuern';
$lang['report_invoice_amount_open']       = 'Betrag offen';
$lang['report_invoice_status']            = 'Status';
#Version 1.0.9
# Home stats
$lang['home_stats_by_project_status'] = 'Statistiken nach Projekt Status';
$lang['home_invoice_overview']        = 'Rechnungsüberblick';
$lang['home_estimate_overview']       = 'Kostenvoranschlag Überblick';
$lang['home_proposal_overview']       = 'Angebote Überblick';
$lang['home_lead_overview']           = 'Interessenten Übersicht';
$lang['home_my_projects']             = 'Meine Projekte';
$lang['home_announcements']           = 'Ankündigungen';
# Settings
$lang['settings_leads_kanban_limit']                                    = 'Die Interessenten auf Kanban Reihen pro Status limitieren';
$lang['settings_group_misc']                                            = 'Verschiedenes';
$lang['show_projects_on_calendar']                                      = 'Projekte im Kalender anzeigen';
$lang['settings_media_max_file_size_upload']                            = 'Max Dateigröße in Medien (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Dem Kunden/Mitarbeiter erlauben Kommentare nur in der ersten Stunde zu bearbeiten / hinzuzufügen. (Administratoren sind ausgenommen)';
# E-Mail templates
$lang['email_template_only_domain_email'] = 'Nur Domain E-Mail';
# Ankündigungen
$lang['dismiss_announcement']   = 'Ankündigung entfernen';
$lang['announcement_from']      = 'Von:';
$lang['announcement_date']      = 'Geschrieben am: %s';
$lang['announcement_not_found'] = 'Ankündigung nicht gefunden';
$lang['announcements_recent']   = 'Aktuelle Ankündigungen';
# General
$lang['zip_invoices']         = 'Rechnungen zippen';
$lang['zip_estimates']        = 'Angebote zippen';
$lang['zip_payments']         = 'Zahlungen zippen';
$lang['setup_help']           = 'Hilfe';
$lang['clients_list_company'] = 'Firma';
$lang['dt_button_export']     = 'Export';
$lang['dt_entries']           = ' Einträge';
$lang['invoice_total_paid']   = 'Gesamt bezahlt';
$lang['invoice_amount_due']   = 'Verbindlichkeit';
# Calendar
$lang['calendar_project'] = 'Projekt';
# Leads
$lang['leads_import_assignee']     = 'Verantwortliche Person';
$lang['customer_from_lead']        = 'Kunde von %s';
$lang['lead_kan_ban_attachments']  = 'Anhänge %s';
$lang['leads_sort_by_lastcontact'] = 'Letzter Kontakt';
# Tasks
$lang['task_comment_added']     = 'Kommentar erfolgreich entgegen genommen';
$lang['task_duedate']           = 'Fälligkeitsdatum';
$lang['task_view_comments']     = 'Kommentare';
$lang['task_comment_updated']   = 'Kommentar aktualisiert';
$lang['task_visible_to_client'] = 'Für Kunde sichtbar';
$lang['task_hourly_rate']       = 'Stundensatz';
$lang['hours']                  = 'Stunden';
$lang['seconds']                = 'Sekunden';
$lang['minutes']                = 'Minuten';
$lang['task_start_timer']       = 'Stoppuhr starten';
$lang['task_stop_timer']        = 'Stoppuhr stoppen';
$lang['task_billable']          = 'Abrechenbar';
$lang['task_billable_yes']      = 'Abrechenbar';
$lang['task_billable_no']       = 'Nicht Abrechenbar';
$lang['task_billed']            = 'Berechnet';
$lang['task_billed_yes']        = 'Berechnet';
$lang['task_billed_no']         = 'Nicht Berechnet';
$lang['task_user_logged_time']  = 'Deine aufgezeichnete Zeit:';
$lang['task_total_logged_time'] = 'Gesamt aufgezeichnete Zeit:';
$lang['task_is_billed']         = 'Diese Aufgabe wurde auf RNr. %s berechnet.';
$lang['task_statistics']        = 'Statistiken';
$lang['task_milestone']         = 'Meilensteine';
# Tickets
$lang['ticket_message_updated_successfully'] = 'Nachricht erfolgreich aktualisiert';
# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projektaufgaben sind in dieser Liste nicht enthalten.';
$lang['show_quantity_as']                             = 'Menge zeigen als:';
$lang['quantity_as_qty']                              = 'Anzahl';
$lang['quantity_as_hours']                            = 'Stunden';
$lang['invoice_table_hours_heading']                  = 'Stunden';
$lang['bill_tasks']                                   = 'Bezahlte Aufgabe';
$lang['invoice_estimate_sent_to_email']               = 'E-Mail';
# Estimates
$lang['estimate_table_hours_heading'] = 'Stunden';
# General
$lang['is_customer_indicator']         = 'Kunde';
$lang['print']                         = 'Drucken';
$lang['customer_permission_projects']  = 'Projekte';
$lang['no_timers_found']               = 'Kein aktive Zeitaufzeichnung';
$lang['timers_started_confirm_logout'] = 'Laufende Stoppuhr erkannt!<br />Sicher, dass du dich ausloggen möchtest, ohne den Timer zu stoppen?';
$lang['confirm_logout']                = 'Abmelden';
$lang['timer_top_started']             = 'Gestartet um %s';
# Projects
$lang['cant_change_billing_type_billed_tasks_found']         = 'Der Rechnungstyp kann nicht geändert werden. Bereits verrechnete Aufgaben wurden für dieses Projekt gefunden.';
$lang['project_customer_permission_warning']                 = 'Der Kunde hat keine Berechtigung, dieses Projekt einzusehen. Um das zu ändern, die Berechtigung im Kundenprofil (Tab Berechtigung) ändern.';
$lang['project_invoice_timesheet_start_time']                = 'Startzeit: %s';
$lang['project_invoice_timesheet_end_time']                  = 'Endzeit: %s';
$lang['project_invoice_timesheet_total_logged_time']         = 'Aufgezeichnete Zeit: %s';
$lang['project_view_as_client']                              = 'Zeige Projekt als Kunde';
$lang['project_mark_all_tasks_as_completed']                 = 'Alle Aufgaben als erledigt markieren und alle Stoppuhren stoppen (Es wird keine Nachricht an Projektmitglieder gesendet)';
$lang['project_not_started_status_tasks_timers_found']       = 'Aufgabenzeiten wurden für dieses Projekt gefunden, aber das Projekt besitzt den Status Nicht Gestartet. Den Status sollte zu "In Arbeit" geändert werden?';
$lang['project_status']                                      = 'Status';
$lang['project_status_1']                                    = 'Nicht Gestartet';
$lang['project_status_2']                                    = 'In Arbeit';
$lang['project_status_3']                                    = 'Wartend';
$lang['project_status_4']                                    = 'Beendet';
$lang['project_file_dateadded']                              = 'Upload-Datum';
$lang['project_file_filename']                               = 'Dateinamen';
$lang['project_file__filetype']                              = 'Dateityp';
$lang['project_file_visible_to_customer']                    = 'Für den Kunden sichtbar';
$lang['project_file_uploaded_by']                            = 'Hochgeladen von';
$lang['edit_project']                                        = 'Projekt bearbeiten';
$lang['copy_project']                                        = 'Projekt kopieren';
$lang['delete_project']                                      = 'Projekt löschen';
$lang['project_task_assigned_to_user']                       = 'Aufgaben die mir zugewiesen wurden';
$lang['seconds']                                             = 'Sekunden';
$lang['hours']                                               = 'Stunden';
$lang['minutes']                                             = 'Minuten';
$lang['project']                                             = 'Projekt';
$lang['project_lowercase']                                   = $lang['project'];
$lang['projects']                                            = 'Projekte';
$lang['projects_lowercase']                                  = $lang['projects'];
$lang['project_settings']                                    = 'Projekt Einstellungen';
$lang['project_invoiced_successfully']                       = 'Projektrechnung erfolgreich gestellt';
$lang['new_project']                                         = 'Projekt erstellen';
$lang['project_files']                                       = 'Dateien';
$lang['project_activity']                                    = 'Aktivität';
$lang['project_name']                                        = 'Projekt Name';
$lang['project_description']                                 = 'Projekt Beschreibung';
$lang['project_customer']                                    = 'Kunde';
$lang['project_start_date']                                  = 'Start Datum';
$lang['project_datecreated']                                 = 'Erstellt am';
$lang['project_deadline']                                    = 'Deadline';
$lang['project_billing_type']                                = 'Abrechnungsart';
$lang['project_billing_type_fixed_cost']                     = 'Pauschal';
$lang['project_billing_type_project_hours']                  = 'Stundenaufzeichnung';
$lang['project_billing_type_project_task_hours']             = 'Aufgaben Aufzeichnung';
$lang['project_billing_type_project_task_hours_hourly_rate'] = 'Basierend auf Aufgaben-Stundensatz';
$lang['project_rate_per_hour']                               = 'Stundensatz';
$lang['project_total_cost']                                  = 'Kosten gesamt';
$lang['project_members']                                     = 'Projekt Mitglieder';
$lang['project_member_removed']                              = 'Projekt Mitglieder erfolgreich gelöscht';
$lang['project_overview']                                    = 'Projekt Überblick';
$lang['project_gant']                                        = 'Tabellen Übersicht';
$lang['project_milestones']                                  = 'Meilensteine';
$lang['project_milestone_order']                             = 'Auftrag';
$lang['project_milestone_duedate_passed']                    = 'Fälligkeitsdatum überschritten';
$lang['record_timesheet']                                    = 'Zeiterfassung';
$lang['new_milestone']                                       = 'Meilenstein erstellen';
$lang['edit_milestone']                                      = 'Meilenstein bearbeiten';
$lang['milestone_name']                                      = 'Name';
$lang['milestone_due_date']                                  = 'Fällig bis';
$lang['project_milestone']                                   = 'Meilenstein';
$lang['project_notes']                                       = 'Notizen';
$lang['project_timesheets']                                  = 'Zeiterfassungen';
$lang['project_timesheet']                                   = 'Zeiterfassung';
$lang['milestone_total_logged_time']                         = 'Aufgezeichnete Zeit';
$lang['project_overview_total_logged_hours']                 = 'Gesamt aufgezeichnete Stunden';
$lang['milestones_uncategorized']                            = 'Unkategorisiert';
$lang['milestone_no_tasks_found']                            = 'Keine Aufgaben gefunden';
$lang['project_copied_successfully']                         = 'Projektdaten erfolgreich kopiert';
$lang['failed_to_copy_project']                              = 'Fehler beim Kopieren des Projektes';
$lang['copy_project_task_include_check_list_items']          = 'Kopiere Checklisten-Einträge';
$lang['copy_project_task_include_assignees']                 = 'Mit Verantwortlichen kopieren';
$lang['copy_project_task_include_followers']                 = 'Mit Followern kopieren';
$lang['project_days_left']                                   = 'Tage übrig';
$lang['project_open_tasks']                                  = 'Offene Aufgaben';
$lang['timesheet_stop_timer']                                = 'Stoppe Timer';
$lang['failed_to_add_project_timesheet_end_time_smaller']    = 'Fehler beim Zufügen - Endzeit ist kleiner als Startzeit';
$lang['project_timesheet_user']                              = 'Mitglied';
$lang['project_timesheet_start_time']                        = 'Startzeit';
$lang['project_timesheet_end_time']                          = 'Endzeit';
$lang['project_timesheet_time_spend']                        = 'Verwendete Zeit';
$lang['project_timesheet_task']                              = 'Aufgabe';
$lang['project_invoices']                                    = 'Rechnungen';
$lang['total_logged_hours_by_staff']                         = 'Gesamt aufgezeichnete Zeit';
$lang['invoice_project']                                     = 'Rechnung erstellen';
$lang['invoice_project_info']                                = 'Projekt Rechnungsinfo';
$lang['invoice_project_data_single_line']                    = 'Einzelne Zeile';
$lang['invoice_project_data_task_per_item']                  = 'Eintrag pro Aufgabe';
$lang['invoice_project_data_timesheets_individually']        = 'Alle Zeiterfassungen individuell';
$lang['invoice_project_item_name_data']                      = 'Eintragsname';
$lang['invoice_project_description_data']                    = 'Beschreibung';
$lang['invoice_project_projectname_taskname']                = 'Projektname + Aufgabenname';
$lang['invoice_project_all_tasks_total_logged_time']         = 'Alle Aufgaben + gesamt aufgezeichnete Zeit pro Aufgabe';
$lang['invoice_project_project_name_data']                   = 'Projektname';
$lang['invoice_project_timesheet_individually_data']         = 'Zeiterfassung Startzeit + Endzeit + gesamt aufgezeichnete Zeit';
$lang['invoice_project_total_logged_time_data']              = 'Gesamt aufgezeichnete Zeit';
$lang['project_allow_client_to']                             = 'Erlaube dem Kunden %s';
$lang['project_setting_view_task_attachments']               = 'Aufgabenanhänge anzusehen';
$lang['project_setting_view_task_checklist_items']           = 'Aufgaben Checklisteneinträge anzusehen';
$lang['project_setting_upload_files']                        = 'Dateien hochzuladen';
$lang['project_setting_view_task_comments']                  = 'Aufgabenkommentare anzusehen';
$lang['project_setting_upload_on_tasks']                     = 'Anhänge zu Aufgaben hochzuladen';
$lang['project_setting_view_task_total_logged_time']         = 'gesamt aufgezeichnete Aufgaben-Zeit anzusehen';
$lang['project_setting_open_discussions']                    = 'eine Diskussion zu starten';
$lang['project_setting_comment_on_tasks']                    = 'Projektaufgaben zu kommentieren';
$lang['project_setting_view_tasks']                          = 'Aufgaben anzusehen';
$lang['project_setting_view_milestones']                     = 'Meilensteine anzusehen';
$lang['project_setting_view_gantt']                          = 'Gantt anzusehen';
$lang['project_setting_view_timesheets']                     = 'erfasste Arbeitszeiten anzusehen';
$lang['project_setting_view_activity_log']                   = 'Aktivitätslogs anzusehen';
$lang['project_setting_view_team_members']                   = 'Teammitglieder anzusehen';
$lang['project_discussion_visible_to_customer_yes']          = 'Sichtbar';
$lang['project_discussion_visible_to_customer_no']           = 'Verborgen';
$lang['project_discussion_posted_on']                        = 'Geschrieben am %s';
$lang['project_discussion_posted_by']                        = 'Geschrieben von %s';
$lang['project_discussion_failed_to_delete']                 = 'Fehler beim Löschen der Diskussion';
$lang['project_discussion_deleted']                          = 'Diskussion erfolgreich gelöscht';
$lang['project_discussion_no_activity']                      = 'Keine Aktivität';
$lang['project_discussion']                                  = 'Diskussion';
$lang['project_discussions']                                 = 'Diskussionen';
$lang['edit_discussion']                                     = 'Diskussion bearbeiten';
$lang['new_project_discussion']                              = 'Diskussion erstellen';
$lang['project_discussion_subject']                          = 'Thema';
$lang['project_discussion_description']                      = 'Beschreibung';
$lang['project_discussion_show_to_customer']                 = 'Für den Kunden sichtbar';
$lang['project_discussion_total_comments']                   = 'Gesamt Kommentare';
$lang['project_discussion_last_activity']                    = 'Letzte Aktivität';
$lang['discussion_add_comment']                              = 'Kommentar zufügen';
$lang['discussion_newest']                                   = 'Neueste';
$lang['discussion_oldest']                                   = 'Älteste';
$lang['discussion_attachments']                              = 'Anhänge';
$lang['discussion_send']                                     = 'Senden';
$lang['discussion_reply']                                    = 'Antwort';
$lang['discussion_edit']                                     = 'Bearbeiten';
$lang['discussion_edited']                                   = 'Bearbeitet';
$lang['discussion_you']                                      = 'du selber';
$lang['discussion_save']                                     = 'Speichern';
$lang['discussion_delete']                                   = 'Löschen';
$lang['discussion_view_all_replies']                         = 'Alle Antworten zeigen';
$lang['discussion_hide_replies']                             = 'Antworten verbergen';
$lang['discussion_no_comments']                              = 'Keine Kommentare';
$lang['discussion_no_attachments']                           = 'Keine Anhänge';
$lang['discussion_attachments_drop']                         = 'Drag & drop um Datei hochzuladen';
$lang['project_note']                                        = 'Notiz';
$lang['project_note_private']                                = 'Private Notizen';
$lang['project_save_note']                                   = 'Speichere Notiz';
# Project Activity
$lang['project_activity_created']                      = 'hat ein Projekt erstellt';
$lang['project_activity_updated']                      = 'hat ein Projekt aktualisiert';
$lang['project_activity_removed_team_member']          = 'hat ein Teammitglied gelöscht';
$lang['project_activity_added_team_member']            = 'hat ein Teammitglied hinzugefügt';
$lang['project_activity_marked_all_tasks_as_complete'] = 'hat alle Aufgaben als erledigt markiert';
$lang['project_activity_recorded_timesheet']           = 'hat Arbeitszeit aufgezeichnet';
$lang['project_activity_task_name']                    = 'Aufgaben:';
$lang['project_activity_deleted_discussion']           = 'hat eine Diskussion gelöscht';
$lang['project_activity_created_discussion']           = 'hat eine Diskussion erstellt';
$lang['project_activity_updated_discussion']           = 'hat eine Diskussion aktualisiert';
$lang['project_activity_commented_on_discussion']      = 'hat in einer Diskussion reagiert';
$lang['project_activity_deleted_discussion_comment']   = 'hat einen Kommentar gelöscht';
$lang['project_activity_deleted_milestone']            = 'hat einen Meilenstein gelöscht';
$lang['project_activity_updated_milestone']            = 'hat einen Meilenstein aktualisiert';
$lang['project_activity_created_milestone']            = 'hat einen neuen Meilenstein erstellt';
$lang['project_activity_invoiced_project']             = 'hat ein Projekt verrechnet';
$lang['project_activity_task_marked_complete']         = 'hat eine Aufgabe als erledigt markiert';
$lang['project_activity_task_unmarked_complete']       = 'hat einen Aufgabenstatus rückgängig gemacht';
$lang['project_activity_task_deleted']                 = 'hat eine Aufgabe gelöscht';
$lang['project_activity_new_task_comment']             = 'hat eine Aufgabe kommentiert';
$lang['project_activity_new_task_attachment']          = 'hat einen Anhang zu einer Aufgabe hochgeladen';
$lang['project_activity_new_task_assignee']            = 'hat einen neuen Aufgabenverantwortlichen hinzugefügt';
$lang['project_activity_task_assignee_removed']        = 'hat eine Aufgabenverantwortlichen entfernt';
$lang['project_activity_task_timesheet_deleted']       = 'hat eine Arbeitszeit gelöscht';
$lang['project_activity_uploaded_file']                = 'hat eine Projektdatei hochgeladen';
$lang['project_activity_status_updated']               = 'hat einen Projektstatus aktualisiert';
$lang['project_activity_visible_to_customer']          = 'Für den Kunden sichtbar';
$lang['project_activity_project_file_removed']         = 'hat eine Projektdatei gelöscht';
# Customers area
$lang['clients_my_estimates'] = 'Meine Angebote';
$lang['client_no_reply']      = 'Keine Antwort';
$lang['clients_nav_projects'] = 'Projekte';
$lang['clients_my_projects']  = 'Meine Projekte';
$lang['client_profile_image'] = 'Profil Bild';
/////
$lang['sales_report_cancelled_invoices_not_included']          = 'Abgebrochene Rechnungen tauchen nicht im Report auf';
$lang['invoices_merge_cancel_merged_invoices']                 = 'Zusammengeführte Rechnungen als abgebrochen markieren, anstatt sie zu löschen';
$lang['invoice_marked_as_cancelled_successfully']              = 'Rechnung erfolgreich als abgebrochen markiert';
$lang['invoice_unmarked_as_cancelled']                         = 'Rechnung nicht mehr als abgebrochen markiert';
$lang['tasks_reminder_notification_before']                    = 'Aufgaben Deadline Erinnerung (Tage) zuvor';
$lang['not_task_deadline_reminder']                            = 'Aufgaben Deadline Erinnerung';
$lang['dt_length_menu_all']                                    = 'Alle';
$lang['task_not_finished']                                     = 'Nicht abgeschlossen';
$lang['task_billed_cant_start_timer']                          = 'Aufgabe wurde schon berechnet. Stoppuhr kann nicht mehr gestartet werden';
$lang['invoice_task_billable_timers_found']                    = 'Bereits gestartete Zeiterfassung gefunden';
$lang['project_timesheet_not_updated']                         = 'Zeiterfassung wurde nicht aktualisiert';
$lang['project_invoice_task_no_timers_found']                  = 'Keine erfassten Zeiten für diese Aufgabe gefunden';
$lang['invoice_project_tasks_not_started']                     = 'Noch nicht gestartet | Start Datum: %s';
$lang['invoice_project_see_billed_tasks']                      = 'Aufgaben ansehen, die auf dieser Rechnung berechnet werden';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Alle berechneten Aufgaben werden als erledigt gekennzeichnet';
$lang['invoice_project_nothing_to_bill']                       = 'Keine Aufgaben zum Verrechnen.';
$lang['invoice_project_start_date_tasks_not_passed']           = 'Aufgaben mit einem Startdatum in der Zukunft können nicht berechnet werden';
$lang['invoice_project_stop_all_timers']                       = 'Alle Stoppuhren stoppen';
$lang['invoice_project_stop_billable_timers_only']             = 'Nur abrechenbare Stoppuhren beenden';
$lang['project_tasks_total_timers_stopped']                    = 'Stoppte gesamt %s Stoppuhren';
$lang['project_invoice_timers_started']                        = 'Laufende Zeiterfassung bei berechenbaren Aufgaben gefunden, die Rechnung kann nicht erstellt werden. Bitte erst die Stoppuhren beenden.';
$lang['task_start_timer_only_assignee']                        = 'Du musst dieser Aufgabe zugewiesen sein, um die Zeiterfassung zu starten!';
$lang['task_comments']                                         = 'Kommentare';
$lang['invoice_total_tax']                                     = 'Steuer';
$lang['estimates_total_tax']                                   = $lang['invoice_total_tax'];
$lang['report_invoice_total_tax']                              = $lang['invoice_total_tax'];
$lang['home_tickets']                                          = 'Tickets';
$lang['home_project_activity']                                 = 'Neueste Projektaktivitäten';
$lang['view_tracking']                                         = 'Zeige Tracking';
$lang['view_date']                                             = 'Datum';
$lang['view_ip']                                               = 'IP Adresse';
$lang['article_total_views']                                   = 'Gesamt Ansichten';
$lang['leads_source']                                          = 'Quelle';
$lang['invoices_available_for_merging']                        = 'Rechnungen zum Zusammenführen verfügbar';
$lang['invoices_merge_discount']                               = 'Der Rabatt von gesamt %s muss manuell zu dieser Rechnung hinzugefügt werden.';
$lang['invoice_merge_number_warning']                          = 'Zusammenführen von Rechnungen wird Lücken in den Rechnungsnummern produzieren. Um das zu verhindern, kann bei zukünftigen Rechnungen eine manuelle Rechnungsnummer gesetzt werden.';
$lang['invoice_mark_as']                                       = 'Als %s markieren';
$lang['invoice_unmark_as']                                     = 'Nicht mehr als %s markieren';
$lang['invoice_status_cancelled']                              = 'Abgebrochen';
$lang['tasks_reminder_notification_before_help']               = 'Den Aufgaben Zugewiesenen x Tage vor der Deadline benachrichtigen. Die Infomail wird nur an Aufgaben-Zugewiesene gesendet.';
/* STOP TRANSLATING */

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Alle Aufgaben markieren';
$lang['lead_company']                     = 'Unternehmen';

# Version 1.1.1
$lang['admin_auth_forgot_password_button']       = 'Bestätigen';
$lang['task_assigned']                           = 'Zugewiesen';
$lang['switch_to_pipeline']                      = 'Zu Pipeline wechseln';
$lang['switch_to_list_view']                     = 'Zu Liste wechseln';
$lang['estimates_pipeline']                      = 'Angebot Pipeline';
$lang['estimates_pipeline_sort']                 = 'Nach sortieren';
$lang['estimates_sort_expiry_date']              = 'Gültig bis Datum';
$lang['estimates_sort_pipeline']                 = 'Pipeline Reihenfolge';
$lang['estimates_sort_datecreated']              = 'Erstellt am';
$lang['estimates_sort_estimate_date']            = 'Angebot Datum';
$lang['estimate_set_reminder_title']             = 'Angebotserinnerung erstellen';
$lang['invoice_set_reminder_title']              = 'Rechnungserinnerung erstellen';
$lang['estimate_reminders']                      = 'Erinnerungen';
$lang['invoice_reminders']                       = 'Erinnerungen';
$lang['estimate_notes']                          = 'Notizen';
$lang['estimate_add_note']                       = 'Notiz hinzufügen';
$lang['dropdown_non_selected_tex']               = 'Nichts ausgewählt';
$lang['auto_close_ticket_after']                 = 'Ticket nach X Stunden schließen';
$lang['event_description']                       = 'Beschreibung';
$lang['delete_event']                            = 'Löschen';
$lang['not_new_ticket_created']                  = 'Ein neues Ticket in der Abteilung eröffnet - %s';
$lang['receive_notification_on_new_ticket']      = 'Meldung bei neuen geöffneten Tickets erhalten';
$lang['receive_notification_on_new_ticket_help'] = 'Alle Mitarbeiter, die zur Ticketabteilung gehören, werden über neue Tickets informiert.';
$lang['event_updated']                           = 'Ereignis erfolgreich aktualisiert!';
$lang['customer_contacts']                       = 'Kontakte';
$lang['new_contact']                             = 'Neuer Kontakt';
$lang['contact']                                 = 'Kontakt';
$lang['contact_lowercase']                       = $lang['contact'];
$lang['contact_primary']                         = 'Haupt Ansprechpartner';
$lang['contact_position']                        = 'Position';
$lang['contact_active']                          = 'Aktiv';
$lang['client_company_info']                     = 'Firmen Details';
$lang['proposal_save']                           = 'Angebot speichern';
$lang['calendar']                                = 'Kalender';
$lang['settings_pdf']                            = 'PDF';
$lang['settings_pdf_font']                       = 'PDF Schriftart';
$lang['settings_pdf_table_heading_color']        = 'Tabellenkopf Farbe';
$lang['settings_pdf_table_heading_text_color']   = 'Tabellenkopf Schrift-Farbe';
$lang['settings_pdf_font_size']                  = 'Standard Schriftgröße';
$lang['proposal_status_draft']                   = 'Entwurf';
$lang['custom_field_contacts']                   = 'Kontakte';
$lang['company_primary_email']                   = 'Standard E-Mail';
$lang['client_register_contact_info']            = 'Standard Kontakt Information';
$lang['client_register_company_info']            = 'Firmen Informationen';
$lang['contact_permissions_info']                = 'Darauf achten, die entsprechenden Berechtigungen für diesen Kontakt zu setzen';
$lang['default_leads_kanban_sort']               = 'Standard Interessenten Kanban Sortierung';
$lang['default_leads_kanban_sort_type']          = 'Sortieren';
$lang['order_ascending']                         = 'Aufsteigend';
$lang['order_descending']                        = 'Absteigend';
$lang['calendar_expand']                         = 'erweitern';
$lang['proposal_reminders']                      = 'Erinnerung';
$lang['proposal_set_reminder_title']             = 'Eine Erinnerung zu diesem Vorschlag hinzufügen';
$lang['settings_allowed_upload_file_types']      = 'Erlaubte Dateitypen';
$lang['no_primary_contact']                      = 'Dieser Kunde hat keinen Hauptansprechpartner. Es muss einer gesetzt sein, damit sich der Kunde einloggen kann. es ist auf jeden Fall empfohlen, dass bei jedem Kunde ein Hauptansprechpartner eingetragen ist.';
$lang['leads_merge_customer']                    = 'Benutzerdefinierte Felder verbinden';
$lang['leads_merge_contact']                     = 'Kontakt Felder verbinden';
$lang['leads_merge_as_contact_field']            = 'Als Kontaktfeld verbinden';
$lang['lead_convert_to_client_phone']            = 'Telefon';
$lang['invoice_status_report_all']               = 'Alle';
$lang['import_contact_field']                    = 'Kontakt Feld';
$lang['file_uploaded_success']                   = 'Hier gibt’s keinen Fehler zu sehen. Datei erfolgreich hochgeladen';
$lang['file_exceeds_max_filesize']               = 'Die hochgeladene Datei überschreitet die upload_max_filesize Direktive der php.ini - bitte an den Admin wenden';
$lang['file_exceeds_maxfile_size_in_form']       = 'Die hochgeladene Datei übersteigt die erlaubte Größe der MAX_FILE_SIZE Directive des HTML Formulares';
$lang['file_uploaded_partially']                 = 'Die Datei wurde nur teilweise hochgeladen';
$lang['file_not_uploaded']                       = 'Es wurde keine Datei hochgeladen';
$lang['file_missing_temporary_folder']           = 'Temporärer Ordner fehlt';
$lang['file_failed_to_write_to_disk']            = 'Fehler beim Schreiben der Datei auf den Server.';
$lang['file_php_extension_blocked']              = 'Eine PHP Erweiterung stoppte den Dateiupload.';
$lang['calendar_expand']                         = 'Erweitern';
$lang['view_pdf']                                = 'PDF anzeigen';
$lang['expense_repeat_every']                    = 'Alle X wiederholen';

# Version 1.1.2
$lang['leads_switch_to_kanban']                   = 'Zu Kanban wechseln';
$lang['contract_content']                         = 'Vertrag';
$lang['contract_save']                            = 'Vertrag speichern';
$lang['contract_send_to_email']                   = 'An E-Mail senden';
$lang['contract_send_to_client_modal_heading']    = 'Vertrag an E-Mail senden';
$lang['contract_send_to']                         = 'Senden an';
$lang['contract_send_to_client_attach_pdf']       = 'PDF anhängen';
$lang['contract_send_to_client_preview_template'] = 'Vorschau E-Mail Template';
$lang['include_attachments_to_email']             = 'Anhänge der E-Mail hinzufügen';
$lang['contract_sent_to_client_success']          = 'Der Vertrag wurde erfolgreich an den Kunden versandt.';
$lang['contract_sent_to_client_fail']             = 'Senden des Vertrages fehlgeschlagen';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Ungültiger Nutzername oder Passwort';
$lang['client_old_password_incorrect']       = 'Das alte Passwort ist nicht korrekt';
$lang['client_password_changed']             = 'Das Passwort wurde geändert';

# Version 1.1.4
$lang['total_leads_deleted']                              = 'Insgesamt gelöschte Interessenten: %s';
$lang['total_clients_deleted']                            = 'Insgesamt gelöschte Kunden: %s';
$lang['confirm_action_prompt']                            = 'Sicher, dass diese Aktion ausgeführt werden soll?';
$lang['mass_delete']                                      = 'Massenlöschung';
$lang['email_protocol']                                   = 'E-Mail Protocol';
$lang['add_edit_members']                                 = 'Hinzufügen/Bearbeiten von Mitgliedern';
$lang['project_overview_logged_hours']                    = 'Aufgezeichnete Stunden:';
$lang['project_overview_billable_hours']                  = 'Berechenbare Stunden:';
$lang['project_overview_billed_hours']                    = 'Verrechnete Stunden:';
$lang['project_overview_unbilled_hours']                  = 'Nicht berechnete Stunden:';
$lang['calendar_first_day']                               = 'Erster Tag';
$lang['permission_view']                                  = 'Ansehen';
$lang['permission_edit']                                  = 'Bearbeiten';
$lang['permission_create']                                = 'Erstellen';
$lang['permission_delete']                                = 'Löschen';
$lang['permission']                                       = 'Berechtigung';
$lang['permissions']                                      = 'Berechtigungen';
$lang['proposals_pipeline']                               = 'Vorschlag Pipeline';
$lang['proposals_pipeline_sort']                          = 'Sortiere nach';
$lang['proposals_sort_open_till']                         = 'Offen bis';
$lang['proposals_sort_pipeline']                          = 'Pipeline Reihenfolge';
$lang['proposals_sort_datecreated']                       = 'Erstelldatum';
$lang['proposals_sort_proposal_date']                     = 'Vorschlagsdatum';
$lang['is_not_staff_member']                              = 'kein Mitarbeiter';
$lang['lead_created']                                     = 'Erstellt';
$lang['access_tickets_to_none_staff_members']             = 'Zugriff auf Tickets für Nicht-Mitarbeiter erlauben';
$lang['project_expenses']                                 = 'Ausgaben';
$lang['expense_currency']                                 = 'Währung';
$lang['currency_valid_code_help']                         = 'Bitte darauf achten, einen validen Währungscode einzugeben.';
$lang['week']                                             = 'Woche';
$lang['weeks']                                            = 'Wochen';
$lang['month']                                            = 'Monat';
$lang['months']                                           = 'Monate';
$lang['year']                                             = 'Jahr';
$lang['years']                                            = 'Jahre';
$lang['expense_report_category']                          = 'Kategorie';
$lang['expense_paid_via']                                 = 'Bezahlt via %s';
$lang['item_as_expense']                                  = '[Ausgabe]';
$lang['show_help_on_setup_menu']                          = 'Das Hilfsmenü im Setup-Menü anzeigen';
$lang['customers_summary_total']                          = 'Gesamte Kunden';
$lang['filter_by']                                        = 'Filtere nach';
$lang['re_captcha']                                       = 'reCAPTCHA';
$lang['recaptcha_site_key']                               = 'Seitenschlüssel';
$lang['recaptcha_secret_key']                             = 'Geheimer Schlüssel';
$lang['recaptcha_error']                                  = 'Das reCAPTCHA war nicht erfolgreich, bitte erneut versuchen.';
$lang['smtp_username']                                    = 'SMTP Nutzername';
$lang['smtp_username_help']                               = 'Bitte nur eintragen, wenn der E-Mail Client auch einen Nutzername für das SMTP Login benötigt.';
$lang['pinned_project']                                   = 'Angepinntes Projekt';
$lang['pin_project']                                      = 'Projekt anpinnen';
$lang['unpin_project']                                    = 'Projekt nicht mehr anpinnen';
$lang['smtp_encryption']                                  = 'E-Mail Verschlüsselung';
$lang['smtp_encryption_none']                             = 'Keine';
$lang['show_proposals_on_calendar']                       = 'Vorschläge';
$lang['invoice_project_see_billed_expenses']              = 'Ausgaben ansehen, die auf der Rechnung integriert werden';
$lang['project_overview_expenses']                        = 'Gesamt Ausgaben';
$lang['project_overview_expenses_billable']               = 'Abrechenbare Ausgaben';
$lang['project_overview_expenses_billed']                 = 'Verrechnete Ausgaben';
$lang['project_overview_expenses_unbilled']               = 'Nicht verrechnete Ausgaben';
$lang['announcement_date_list']                           = 'Datum';
$lang['project_setting_view_finance_overview']            = 'Finanzübersicht anzusehen';
$lang['show_all_tasks_for_project_member']                = 'Mitarbeitern erlauben alle Aufgaben zu einem zugewiesen Projekt einzusehen (inklusive Nicht-Mitgliedern)';
$lang['not_staff_added_as_project_member']                = 'hat dich als Projektmitglied hinzugefügt';
$lang['report_expenses_base_currency_select_explanation'] = 'Es muss eine Währung gewählt werden, da im System verschiedene Währungen für Ausgaben gefunden wurden.';

# Version 1.1.6
$lang['project_activity_recorded_expense']   = 'hat eine Ausgabe eingetragen';
$lang['save_customer_and_add_contact']       = 'Speichern und Kontakt erstellen';
$lang['tickets_chart_weekly_opening_stats']  = 'Wöchentliche Statistik';
$lang['related_knowledgebase_articles']      = 'Ähnliche Artikel';
$lang['detailed_overview']                   = 'Aufgabenübersicht';
$lang['tasks_total_checklists_finished']     = 'Gesamtzahl der Checklisten, die als beendet markiert sind';
$lang['tasks_total_added_attachments']       = 'Alle hinzugefügten Anhänge';
$lang['tasks_total_comments']                = 'Alle Kommentare';
$lang['task_finished_on_time']               = 'Pünktlich beendet?';
$lang['task_finished_on_time_indicator']     = 'Ja';
$lang['task_not_finished_on_time_indicator'] = 'Nein';
$lang['filter']                              = 'Filter';
$lang['task_filter_detailed_all_months']     = 'Alle Monate';
$lang['kb_article_slug']                     = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning']          = 'Wenn das Ticket mit E-Mail-Piping importiert wird und der Kontakt nicht im CRM vorhanden ist, werden die Felder nicht ersetzt.';
$lang['auto_stop_tasks_timers_on_new_timer']    = 'Alle anderen gestarteten Timer stoppen, wenn ein neuer Timer gestartet wird';
$lang['notification_when_customer_pay_invoice'] = 'Benachrichtigung erhalten, wenn Kunde Rechnung bezahlt (integriert)';
$lang['not_invoice_payment_recorded']           = 'Neue Rechnungszahlung - %s';
$lang['email_template_contact_warning']         = 'Wenn der Kontakt während der Aktion nicht erfasst wird, werden die Kontaktverbindungsfelder nicht ersetzt';
$lang['change_role_permission_warning']         = 'Das Ändern der Rollenberechtigungen hat keine Auswirkungen auf aktuelle Mitarbeiter, die diese Rolle nutzen.';
$lang['task_copied_successfully']               = 'Die Aufgabe wurde erfolgreich kopiert';
$lang['failed_to_copy_task']                    = 'Die Aufgabe konnte nicht kopiert werden';
$lang['not_project_file_uploaded']              = 'Neue Projektdatei hinzugefügt';
$lang['settings_calendar_color']                = '%s Farbe';
$lang['settings_calendar_colors_heading']       = 'Styling';
$lang['reminder']                               = 'Erinnerung';
$lang['back_to_tasks_list']                     = 'Zurück zur Aufgabenliste';
$lang['copy_task_confirm']                      = 'Bestätigen';
$lang['changing_items_affect_warning']          = 'Das Ändern der Informationen hat keine Auswirkungen auf die erstellten Rechnungen/Angebote.';
$lang['tax_is_used_in_expenses_warning']        = 'Diese Steuern können nicht angepasst werden, da einige Ausgabentransaktionen diese Steuern verwenden.';
$lang['note']                                   = 'Notiz';
$lang['leads_staff_report_converted']           = 'Insgesamt umgewandelte Interessenten';
$lang['leads_staff_report_created']             = 'Insgesamt erstellte Interessenten';
$lang['leads_staff_report_lost']                = 'Insgesamt verlorene Interessenten';
$lang['client_go_to_dashboard']                 = 'Zurück zum Portal';
$lang['calendar_estimate_reminder']             = 'Angebotserinnerung';
$lang['calendar_invoice_reminder']              = 'Rechnungserinnerung';
$lang['calendar_proposal_reminder']             = 'Angebotserinnerungen';
$lang['show_estimate_reminders_on_calendar']    = 'Angebotserinnerungen';
$lang['show_invoice_reminders_on_calendar']     = 'Rechnungserinnerungen';
$lang['show_proposal_reminders_on_calendar']    = 'Angebotserinnerung';
$lang['proposal_due_after']                     = 'Angebot fällig nach (Tagen)';
$lang['project_progress']                       = 'Fortschritt';
$lang['calculate_progress_through_tasks']       = 'Fortschritt durch Aufgaben berechnen';
$lang['allow_customer_to_change_ticket_status'] = 'Kunden das Ändern des Tickets im Kundenbereich erlauben';
$lang['switch_to_general_report']               = 'Zu Mitarbeiterbericht wechseln';
$lang['switch_to_staff_report']                 = 'Zu allgemeinem Bericht wechseln';
$lang['generate']                               = 'Erzeugen';
$lang['from_date']                              = 'Ab Datum';
$lang['to_date']                                = 'Bis Datum';
$lang['not_results_found']                      = 'Keine Ergebnisse gefunden';
$lang['lead_lock_after_convert_to_customer']    = 'Bearbeiten des Interessenten nach der Konvertierung zum Kunden verbieten (keine Kundenbetreuer zugewiesen)';
$lang['default_pipeline_sort']                  = 'Standard-Pipeline-Sortierung';
$lang['toggle_full_view']                       = 'Vollständige Ansicht umschalten';
$lang['not_estimate_invoice_deleted']           = 'hat die erstellte Rechnung gelöscht';
$lang['not_task_new_comment']                   = 'hat Aufgabe %s kommentiert';

# Version 1.1.8
$lang['invoice_number_exists']                  = 'Diese Rechnungsnummer ist für das laufende Jahr vorhanden.';
$lang['estimate_number_exists']                 = 'Diese Angebotsnummer ist für das laufende Jahr vorhanden.';
$lang['email_exists']                           = 'E-Mail ist bereits vorhanden';
$lang['not_uploaded_project_file']              = 'Neue Datei hochgeladen';
$lang['not_created_new_project_discussion']     = 'Neue Projektbesprechung erstellt';
$lang['not_commented_on_project_discussion']    = 'Neuer Kommentar in Projektbesprechung';
$lang['all_staff_members']                      = 'Alle Mitarbeiter';
$lang['help_project_permissions']               = 'ANSEHEN erlaubt Mitarbeiter, ALLE Projekte anzusehen. Wenn gewollt ist, dass nur zugewiesene Projekte (als Mitglieder hinzugefügt) angezeigt werden, sollte das ANSEHEN-Recht nicht vergeben werden.';
$lang['help_tasks_permissions']                 = 'ANSEHEN erlaubt Mitarbeiter, ALLE Aufgaben anzusehen. Wenn gewollt ist, dass nur zugewiesene Aufgaben oder Aufgaben, denen der Mitarbeiter folgt, angezeigt werden, sollte das ANSEHEN-Recht nicht vergeben werden.';
$lang['expense_recurring_days']                 = 'Tag(e)';
$lang['expense_recurring_weeks']                = 'Woche(n)';
$lang['expense_recurring_months']               = 'Monat(e)';
$lang['expense_recurring_years']                = 'Jahr(e)';
$lang['reset_to_default_color']                 = 'Auf Standardfarbe zurücksetzen';
$lang['pdf_logo_width']                         = 'Logobreite (px)';
$lang['drop_files_here_to_upload']              = 'Dateien zum Hochladen hier ablegen';
$lang['browser_not_support_drag_and_drop']      = 'Der Browser unterstützt keine Drag\'n\'Drop-Uploads von Dateien';
$lang['remove_file']                            = 'Datei entfernen';
$lang['you_can_not_upload_any_more_files']      = 'Es können keine weiteren Dateien hochgeladen werden';
$lang['custom_field_only_admin']                = 'Sichtbarkeit auf Administratoren beschränken';
$lang['leads_default_source']                   = 'Standardquelle';
$lang['clear_activity_log']                     = 'Log leeren';
$lang['default_contact_permissions']            = 'Standard-Kontaktberechtigungen';
$lang['invoice_activity_marked_as_cancelled']   = 'hat die Rechnung als storniert markiert';
$lang['invoice_activity_unmarked_as_cancelled'] = 'hat die Markierung der Rechnung als storniert aufgehoben';
$lang['wait_text']                              = 'Bitte warten …';
$lang['projects_summary']                       = 'Projektübersicht';
$lang['dept_imap_host']                         = 'IMAP-Host';
$lang['dept_encryption']                        = 'Verschlüsselung';
$lang['dept_email_password']                    = 'Passwort';
$lang['dept_email_no_encryption']               = 'Keine Verschlüsselung';
$lang['failed_to_decrypt_password']             = 'Passwort konnte nicht entschlüsselt werden';
$lang['delete_mail_after_import']               = 'E-Mail nach dem Import löschen?';
$lang['expiry_reminder_enabled']                = 'Erinnerung an Ablaufdatum senden';
$lang['send_expiry_reminder_before']            = 'Erinnerung an Ablaufdatum senden vor (TAGEN)';
$lang['not_expiry_reminder_sent']               = 'Erinnerung an Ablaufdatum wurde gesendet';
$lang['send_expiry_reminder']                   = 'Erinnerung an Ablaufdatum gesendet';
$lang['sent_expiry_reminder_success']           = 'Erinnerung an Ablaufdatum erfolgreich gesendet';
$lang['sent_expiry_reminder_fail']              = 'Erinnerung an Ablaufdatum konnte nicht gesendet werden';
$lang['leads_default_status']                   = 'Standardstatus';
$lang['item_description_placeholder']           = 'Beschreibung';
$lang['item_long_description_placeholder']      = 'Lange Beschreibung';
$lang['item_quantity_placeholder']              = 'Menge';
$lang['item_rate_placeholder']                  = 'Preis';
$lang['tickets_summary']                        = 'Ticketübersicht';
$lang['tasks_list_priority']                    = 'Priorität';
$lang['ticket_status_db_2']                     = 'In Bearbeitung';
$lang['ticket_status_db_1']                     = 'Offen';
$lang['ticket_status_db_3']                     = 'Beantwortet';
$lang['ticket_status_db_4']                     = 'Zurückgestellt';
$lang['ticket_status_db_5']                     = 'Geschlossen';
$lang['ticket_priority_db_1']                   = 'Niedrig';
$lang['ticket_priority_db_2']                   = 'Mittel';
$lang['ticket_priority_db_3']                   = 'Hoch';
$lang['customer_have_projects_by']              = 'Enthält Projekte nach Status %s';
$lang['customer_have_proposals_by']             = 'Enthält Angebote nach %s';
$lang['do_not_redirect_payment']                = 'Nicht zur Zahlungsverarbeitung weiterleiten';
$lang['project_tickets']                        = 'Tickets';
$lang['invoice_report']                         = 'Rechnungsbericht';
$lang['payment_modes_report']                   = 'Zahlungsmethoden (Transaktionen)';
$lang['customer_admins']                        = 'Kundenbetreuer';
$lang['assign_admin']                           = 'Kundenbetreuer zuweisen';
$lang['customer_admin_date_assigned']           = 'Datum der Zuweisung';
$lang['customer_admin_login_as_client_message'] = 'Hallo %s. Du bist diesem Kunden als Kundenbetreuer zugewiesen.';
$lang['ticket_form_validation_file_size']       = 'Dateigröße muss kleiner sein als %s';
$lang['has_transactions_currency_base_change']  = 'Die Änderung der Basiswährung ist nur möglich, wenn keine Transaktionen in dieser Währung vorliegen. Die vorherigen Transaktionen löschen, um die Basiswährung zu ändern';
$lang['customers_sort_all']                     = 'Alle';

# Version 1.1.9
$lang['use_recaptcha_customers_area']    = 'Recaptcha im Kundenbereich (Login/Registrieren) verwenden';
$lang['project_marked_as_finished']      = 'hat ein Projekt als abgeschlossen markiert';
$lang['project_status_updated']          = 'Projektstatus aktualisiert';
$lang['remove_decimals_on_zero']         = 'Dezimalstellen bei Zahlen/Beträgen ohne Dezimalstellen entfernen (2,00 wird zu 2, 2,25 bleibt 2,25)';
$lang['remove_tax_name_from_item_table'] = 'Steuerbezeichnung aus Artikeltabellenzeile entfernen';

# Version 1.2.0
$lang['not_billable_expenses_by_categories']      = 'Nicht abrechenbare Ausgaben nach Kategorien';
$lang['billable_expenses_by_categories']          = 'Abrechenbare Ausgaben nach Kategorien';
$lang['format_letter_size']                       = 'A4 Querformat';
$lang['pdf_formats']                              = 'Dokumentformate';
$lang['swap_pdf_info']                            = 'Firmen-/Kundendaten tauschen (Firmendaten nach rechts, Kundendaten nach links)';
$lang['expenses_filter_by_categories']            = 'Nach Kategorien';
$lang['task_copy']                                = 'Kopieren';
$lang['estimate_status']                          = 'Status';
$lang['expenses_report_exclude_billable']         = 'Abrechenbare Ausgaben ausschließen';
$lang['expenses_total']                           = 'Summe';
$lang['estimate_activity_added_attachment']       = 'hat eine Anlage hinzugefügt';
$lang['show_to_customer']                         = 'Dem Kunden zeigen';
$lang['hide_from_customer']                       = 'Vor Kunde verbergen';
$lang['expenses_report_total']                    = 'Summe';
$lang['expenses_report']                          = 'Ausgabenbericht';
$lang['expenses_report_total_tax']                = 'Summe Steuern';
$lang['expenses_detailed_report']                 = 'Detailbericht';
$lang['expense_not_billable']                     = 'Nicht abrechenbar';
$lang['notification_settings']                    = 'Benachrichtigungseinstellungen';
$lang['staff_with_roles']                         = 'Mitarbeiter mit Rollen';
$lang['specific_staff_members']                   = 'Mitarbeiter bestimmen';
$lang['proposal_mark_as']                         = 'Als %s markieren';
$lang['kb_report_total_answers']                  = 'Summe';
$lang['ticket_message_edit']                      = 'Bearbeiten';
$lang['invoice_files']                            = 'Rechnungsdateien';
$lang['estimate_files']                           = 'Angebotsdateien';
$lang['proposal_files']                           = 'Angebotsdateien';
$lang['invoices_awaiting_payment']                = 'Ausstehende Rechnungen';
$lang['tasks_not_finished']                       = 'Nicht abgeschlossene Aufgaben';
$lang['outstanding_invoices']                     = 'Ausstehende Rechnungen';
$lang['past_due_invoices']                        = 'Fällige Rechnungen';
$lang['paid_invoices']                            = 'Bezahlte Rechnungen';
$lang['invoice_estimate_year']                    = 'Jahr';
$lang['task_stats_logged_hours']                  = 'Erfasste Stunden';
$lang['leads_converted_to_client']                = 'Konvertierte Interessenten';
$lang['task_assigned_from']                       = 'Diese Aufgabe wurde dir von %s zugewiesen';
$lang['new_note']                                 = 'Notiz erstellen';
$lang['my_tickets_assigned']                      = 'Mir zugewiesene Tickets';
$lang['filter_by_assigned']                       = 'Nach zugewiesenen Mitarbeiter';
$lang['staff_stats_total_logged_time']            = 'Gesamte erfasste Zeit';
$lang['staff_stats_last_month_total_logged_time'] = 'Letzten Monat erfasste Zeit';
$lang['staff_stats_this_month_total_logged_time'] = 'Diesen Monat erfasste Zeit';
$lang['staff_stats_last_week_total_logged_time']  = 'Letzte Woche erfasste Zeit';
$lang['staff_stats_this_week_total_logged_time']  = 'Diese Woche erfasste Zeit';
// Don't change this because are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user']       = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets']      = $lang['project_timesheets'];
$lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
$lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description']                  = 'Beschreibung';
$lang['description_visible_to_customer']        = 'Beschreibung dem Kunden zeigen';
$lang['upcoming_tasks']                         = 'Kommende Aufgaben';
$lang['payment_credit_card_number']             = 'Kartennummer';
$lang['payment_credit_card_expiration_date']    = 'Ablaufdatum';
$lang['payment_billing_email']                  = 'E-Mail';
$lang['submit_payment']                         = 'Zahlung senden';
$lang['custom_field_disallow_customer_to_edit'] = 'Kunde darf dieses Feld nicht bearbeiten';
$lang['project_due_notice']                     = 'Dieses Projekt ist seit %s Tagen überfällig';
$lang['not_lead_added_attachment']              = 'hat eine neue Anlage zum Interessenten %s hinzugefügt';
$lang['lead_note_date_added']                   = 'Notiz hinzugefügt: %s';
$lang['recurring_custom']                       = 'Benutzerdefiniert';
// Don't translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
$lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction']                                 = 'Richtung';
$lang['notify_project_members_status_change']               = 'Projektmitglieder über Statusänderung des Projekts informieren';
$lang['not_project_status_updated']                         = 'Projektstatus wurde vom %s bis %s aktualisiert';
$lang['ticket_not_found']                                   = 'Ticket nicht gefunden';
$lang['project_not_found']                                  = 'Projekt nicht gefunden';
$lang['export_project_data']                                = 'Projekt Daten exportieren';
$lang['total_project_members']                              = 'Summe Projektmitglieder';
$lang['total_project_files']                                = 'Dateien angehängt';
$lang['total_project_discussions_created']                  = 'Besprechungen erstellt';
$lang['project_member']                                     = 'Mitglied';
$lang['total_project_discussions_comments']                 = 'Summe Kommentare';
$lang['staff_total_task_assigned']                          = 'Summe Zugewiesene Aufgaben';
$lang['staff_total_comments_on_tasks']                      = 'Kommentare zu Aufgaben';
$lang['project_members_overview']                           = 'Übersicht Projektmitglieder';
$lang['project_milestones_overview']                        = 'Übersicht Meilensteine';
$lang['total_tasks_in_milestones']                          = 'Summe Zugewiesene Aufgaben';
$lang['total_task_members_assigned']                        = 'Summe Zugewiesene Mitglieder';
$lang['total_task_members_followers']                       = 'Summe Follower';
$lang['total_milestones']                                   = 'Summe Meilensteine';
$lang['total_project_worked_days']                          = 'Summe Gearbeitete Tage';
$lang['finance_overview']                                   = 'Übersicht Finanzen';
$lang['project_custom_fields']                              = 'Benutzerdefinierte Felder';
$lang['total_tickets_related_to_project']                   = 'Summe Mit dem Projekt verknüpfte Tickets';
$lang['projects_total_invoices_created']                    = 'Summe erstellter Rechnungen';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Keine Zahlungsbestätigung per E-Mail an den Kundenkontakt senden';
$lang['no_preview_available_for_file']                      = 'Keine Vorschau für diese Datei vorhanden.';
$lang['project_activity_deleted_file_discussion_comment']   = 'hat einen Kommentar einer Datei gelöscht';
$lang['email_template_discussion_info']                     = 'Diese Vorlage wird für beide Projektkommentar-E-Mails verwendet. (Datei-Besprechungen und normale Besprechungen)';
$lang['format_a4_portrait_size']                            = 'Hochformat';
$lang['only_show_contact_tickets']                          = 'In Kundenprofil nur Tickets anzeigen, die mit dem angemeldeten Kontakt in Beziehung stehen (Hauptkontakt nicht angewandt)';
$lang['cancel_overdue_reminders_invoice']                   = 'Für diese Rechnung keine Zahlungserinnerungen versenden';
$lang['customer_shipping_address_notice']                   = 'Keine Versandadresse eingeben, wenn auf den Kundenrechnungen keine Versandadresse verwenden werden soll';
$lang['timesheets_overview']                                = 'übersicht Stundenzettel';
$lang['invoice_status_draft']                               = 'Entwurf';
$lang['save_as_draft']                                      = 'Als Entwurf speichern';
$lang['convert_and_save_as_draft']                          = 'Konvertieren und als Entwurf speichern';
$lang['convert']                                            = 'Konvertieren';
$lang['exclude_invoices_draft_from_client_area']            = 'Rechnungen im Entwurfsstatus aus Kundenbereich ausschließen';
$lang['invoice_draft_status_info']                          = 'Diese Rechnung befindet sich im Entwurfsstatus. Der Status wird automatisch geändert, wenn die Rechnung an den Kunden versendet oder als gesendet markiert wird.';
$lang['task_info']                                          = 'Aufgabeninformationen';
$lang['recurring_tasks']                                    = 'Wiederkehrend';
// don't translate these, already translated
$lang['task_repeat_every']                         = $lang['expense_repeat_every'];
$lang['task_recurring_months']                     = $lang['expense_recurring_months'];
$lang['task_recurring_years']                      = $lang['expense_recurring_years'];
$lang['task_recurring_days']                       = $lang['expense_recurring_days'];
$lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
$lang['todays_tasks']                              = 'Heutige Aufgaben';
$lang['payment_mode_invoices_only']                = 'Nur Rechnungen';
$lang['payment_mode_expenses_only']                = 'Nur Ausgaben';
$lang['task_no_checklist_items_found']             = 'Checklistenelemente für diese Aufgabe nicht gefunden';
$lang['task_no_description']                       = 'Keine Beschreibung für diese Aufgabe';
$lang['expenses_reminders']                        = 'Erinnerungen';
$lang['expense_set_reminder_title']                = 'Ausgabenerinnerung einstellen';
$lang['calendar_expense_reminder']                 = 'Ausgabenerinnerung';
$lang['recurring_task']                            = 'Wiederkehrende Aufgabe';
$lang['disable_email_from_being_sent']             = 'Versenden für diese E-Mail deaktivieren';
$lang['not_sent_indicator']                        = 'Nicht gesendet';
$lang['proposal_status_revised']                   = 'überprüft';
$lang['customer_currency_change_notice']           = 'Falls der Kunde eine andere Währung als die Basiswährung verwendet, hier die richtige Währung für diesen Kunden auswählen. Das ändern der Währung ist nach der Erfassung von Transaktionen nicht mehr möglich.';
$lang['click_to_add_content']                      = 'Hier klicken, um Inhalte hinzuzufügen';
$lang['related_to_project']                        = 'Diese/s %s steht in Beziehung zu dem %s: %s';
$lang['back_to_lead']                              = 'Zurück zum Interessenten';
$lang['add_task_timer_started_warning']            = 'Den derzeit laufenden Timer für diese Aufgabe stoppen, um manuell einen neuen Timer hinzuzufügen.';
$lang['sending_email_contact_permissions_warning'] = 'Kundenkontakte konnten nicht automatisch ausgewählt werden. Bitte vergewissern, dass der Kunde Kontakte mit Berechtigung %s hat';

# Version 1.2.6
$lang['currently_supported_currencies']                       = 'Aktuell unterstützte Währungen';
$lang['authorize_notice']                                     = 'Zur Verwendung der Authorize.Net AIM Bezahl-API ist SSL erforderlich. Authorize.net unterstützt nur eine Währung pro Konto. Über das Währungsfeld nur eine mit Ihrem Authorize-Konto verbundene Währung hinzufügen.';
$lang['settings_paymentmethod_developer_mode']                = 'Entwicklermodus';
$lang['payment_cardholder_name']                              = 'Name des Karteninhabers';
$lang['settings_paymentmethod_authorize_api_login_id']        = 'API Login ID';
$lang['settings_paymentmethod_mollie_api_key']                = 'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] = 'API Transaktions-ID';
$lang['settings_paymentmethod_authorize_secret_key']          = 'Secret Key';
$lang['leads_report_converted_notice']                        = 'Nur Interessenten, die zum Standardstatus-Kunden gehören, werden als konvertierte Interessenten betrachtet. Wenn die Interessenten zum Standardstatus-Kunden gehören und nicht zu einem Kunden konvertriert werden, werden sie dennoch als konvertierte Interessenten betrachtet';
$lang['payment_method']                                       = 'Zahlungsmethode';
$lang['payment_method_info']                                  = 'Einige Zahlungsanbieter unterstützten verschiedene Zahlungsmethoden wie Kreditkarte, Paypal. Banküberweisung.';

# Version 1.2.7
$lang['dropbox_app_key']                                    = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses']                = 'Alle Ausgaben auswählen';
$lang['role_update_staff_permissions']                      = 'Berechtigungen aller Mitarbeiter aktualisieren, die diese Rolle nutzen';
$lang['customer_active']                                    = 'Aktiviert';
$lang['note_updated_successfully']                          = 'Notiz erfolgreich aktualisiert';
$lang['update_note']                                        = 'Notiz aktualisieren';
$lang['update_comment']                                     = 'Kommentar aktualisieren';
$lang['comment_updated_successfully']                       = 'Kommentar erfolgreich aktualisiert';
$lang['staff_send_welcome_email']                           = 'Willkommens-E-Mail senden';
$lang['proposal_warning_email_change']                      = 'E-Mail-Adresse für %s geändert. Diese %s ist mit Angeboten verknüpft. Alle mit %s verknüpften Angebots-E-Mails aktualisieren?';
$lang['update_proposal_email_yes']                          = 'Ja, alle verknüpften E-Mail-Adressen aktualisieren.';
$lang['update_proposal_email_no']                           = 'Nein, ich werde dies manuell erledigen.';
$lang['proposals_emails_updated']                           = 'Alle mit dieser %s verknüpften Angebots-E-Mails aktualisiert auf %s';
$lang['custom_field_company']                               = 'Firma';
$lang['actions']                                            = 'Aktionen';
$lang['project_mark_as']                                    = 'Als %s markieren';
$lang['todo_edit_title']                                    = 'Zu erledigende Aufgabe bearbeiten';
$lang['additional_action_required']                         = 'Zusätzliche Aktion erforderlich!';
$lang['project_mark_tasks_finished_confirm']                = 'Bestätigen';
$lang['project_marked_as_success']                          = 'Projekt erfolgreich als %s markiert';
$lang['project_marked_as_failed']                           = 'Projekt konnte nicht als %s markiert werden';
$lang['auto_assign_customer_admin_after_lead_convert']      = 'Nach Konvertierung den Mitarbeiter dem Kunden automatisch als Kundenbetreuer zuweisen';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Wenn diese Option aktiviert ist, wird der Mitarbeiter, der den Interessenten in einen Kunden konvertiert hat, diesem Kunden automatisch als Kundenbetreuer zugewiesen. HINWEIS: Diese Option gilt nur für Mitarbeiter, die keine Berechtigung zu KundenBETRACHTUNG haben';
$lang['auto_close_tickets_disable']                         = 'Zum Deaktivieren auf 0 setzen';
$lang['task_checklist_item_completed_by']                   = 'Abgeschlossen durch %s';
$lang['staff_email_signature_help']                         = 'Ohne Eintrag wird die Standardsignatur aus den Einstellungen verwendet';
$lang['default_task_priority']                              = 'Standardpriorität';
$lang['project_send_created_email']                         = 'E-Mail zur Projekterstellung senden';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf']            = 'Rechnungszahlungen (Transaktionen) auf PDF anzeigen';
$lang['bulk_actions']                                = 'Massenbearbeitung';
$lang['additional_filters']                          = 'Zusätzliche Filter';
$lang['expenses_available_to_bill']                  = 'Ausgaben verfügbar für Rechnung';
$lang['bulk_action_customers_groups_warning']        = 'Wenn keine Gruppe ausgewählt ist, werden alle Gruppen, die dem ausgewählten Kunden zugewiesen sind, entfernt.';
$lang['customer_attachments_show_in_customers_area'] = 'Im Kundenbereich anzeigen';
$lang['customer_attachments_show_notice']            = 'Nur Dateien, die aus dem Kundenprofil hochgeladen wurden, können im Kundenbereich ein- oder ausgeblendet werden.';
$lang['customer_profile_files']                      = 'Dateien';
$lang['no_files_found']                              = 'Keine Dateien gefunden';
$lang['custom_field_column']                         = 'Grid (Bootstrap-Spalte z.B. 12) - Max ist 12';
$lang['task_status']                                 = 'Status';
$lang['task_status_1']                               = 'Nicht angefangen';
$lang['task_status_2']                               = 'Warten auf Rückmeldungen';
$lang['task_status_3']                               = 'Testen';
$lang['task_status_4']                               = 'In Bearbeitung';
$lang['task_status_5']                               = 'Erledigt';
$lang['task_mark_as']                                = 'Als %s markieren';
$lang['task_marked_as_success']                      = 'Aufgabe wurde erfolgreich als %s markiert';
$lang['search_tasks']                                = 'Aufgaben durchsuchen';
$lang['tasks_kanban_limit']                          = 'Begrenzt die Kanbanzeilen pro Status';
$lang['show_on_invoice_on_pdf']                      = 'Zeige %s auf der Rechnungs-PDF';
$lang['show_pay_link_to_invoice_pdf']                = 'Zahlungslink im Rechnungs-PDF anzeigen (wird nicht angewendet, wenn der Rechnungsstatus "Abgebrochen" ist)';
$lang['no_leads_found']                              = 'Keine Interessenten gefunden';
$lang['created_today']                               = 'Heute erstellt';
$lang['total_tasks_deleted']                         = 'Insgesamt gelöschte Aufgaben: %s';
$lang['total_tickets_delete']                        = 'Insgesamt gelöschte Tickets: %s';
$lang['format_letter_portrait']                      = 'Hochformat';
$lang['format_letter_landscape']                     = 'Querformat';
$lang['period_datepicker']                           = 'Zeitraum';
$lang['total_by_hourly_rate']                        = 'Gesamtpreis nach Stundensatz';
$lang['staff_hourly_rate']                           = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'z.B wird die Artikelsteuer 15&#37; als 15&#37; ohne den Steuernamen angezeigt (Wird nicht angewendet, wenn mehrere Steuern mit dem selben Namen und Steuersatz für den Artikel gefunden werden)';
$lang['back_to_project']                      = 'Zurück zum Projekt';
$lang['view_kanban']                          = 'Kanban anzeigen';
$lang['invoice_is_overdue']                   = 'Diese Rechnung ist seit %s Tage überfällig';

# Version 1.2.9
$lang['time_decimal']                            = 'Zeit (dezimal)';
$lang['time_h']                                  = 'Zeit (h)';
$lang['proposal_number_prefix']                  = 'Vorschlagsnummer Präfix';
$lang['settings_number_padding_prefix']          = 'Anzahl führender Nullen<br /> <small>z.B. wenn der Wert 4 ist, wird die Nummer wie folgt formatiert: 005 oder 025</small>';
$lang['this_week_payments']                      = 'Zahlungen diese Woche';
$lang['last_week_payments']                      = 'Zahlungen letzte Woche';
$lang['not_published_new_post']                  = 'hat neuen Beitrag veröffentlicht';
$lang['expense_name']                            = 'Name';
$lang['expense_name_help']                       = 'Für den persönlichen Gebrauch';
$lang['adjustments']                             = 'Anpassungen';
$lang['payments_received']                       = 'Eingegangene Zahlungen';
$lang['not_lead_activity_created_proposal']      = 'hat einen neuen Vorschlag <b>%s</b> erstellt';
$lang['lead_title']                              = 'Position';
$lang['lead_address']                            = 'Adresse';
$lang['lead_city']                               = 'Stadt';
$lang['lead_state']                              = 'Bundesland';
$lang['lead_country']                            = 'Land';
$lang['lead_zip']                                = 'Postleitzahl';
$lang['lead_is_public_yes']                      = 'Ja';
$lang['lead_is_public_no']                       = 'Nein';
$lang['lead_info']                               = 'Interessenten Informationen';
$lang['lead_general_info']                       = 'Allgemeine Informationen';
$lang['lead_latest_activity']                    = 'Neueste Ereignisse';
$lang['item_description_new_lines_notice']       = 'Neue Zeilen werden für die Artikelbeschreibung nicht unterstützt. Stattdessen die lange Beschreibung benutzen.';
$lang['estimates_report']                        = 'Angebotsbericht';
$lang['confirm']                                 = 'Bestätigen';
$lang['delete_staff']                            = 'Mitarbeiter löschen';
$lang['delete_staff_info']                       = 'Einige Daten für diesen Mitarbeiter müssen auf einen anderen Benutzer übertragen werden. Bitte den Benutzer auswählen, zu dem die Daten übertragen werden sollen.';
$lang['estimate_items']                          = 'Angebots Artikel';
$lang['no_proposals_found']                      = 'Kein Vorschlag gefunden';
$lang['no_estimates_found']                      = 'Kein Angebot gefunden';
$lang['pipeline_limit_status']                   = 'Pipeline limit per status';
$lang['settings_update']                         = 'Systemupdate';
$lang['purchase_key']                            = 'Lizenz Key';
$lang['update_now']                              = 'Jetzt updaten';
$lang['update_available']                        = 'Ein Update ist verfügbar';
$lang['latest_version']                          = 'Neueste Version';
$lang['your_version']                            = 'Installierte Version';
$lang['using_latest_version']                    = 'Die neueste Version wird bereits verwendet';
$lang['mark_as_active']                          = 'Als aktiv markieren';
$lang['customer_inactive_message']               = 'Dies ist ein inaktives Kundenprofil, und einige Funktionen sind möglicherweise deaktiviert';
$lang['active_customers']                        = 'Aktive Kunden';
$lang['inactive_active_customers']               = 'Inaktive Kunden';
$lang['include_proposal_items_merge_field_help'] = 'Vorschlagsartikel mit Zusammenführungsfeld überall im Vorschlagsinhalt als %s einfügen';
$lang['all_data_synced_successfully']            = 'Alle Daten wurden erfolgreich synchronisiert';
$lang['sync_now']                                = 'Jetzt synchronisieren';
$lang['sync_data']                               = 'Daten synchronisieren';
$lang['sync_proposals_up_to_date']               = 'Alle Vorschläge sind auf dem neuesten Stand, nichts zu synchronisieren';
$lang['proposal_sync_1_info']                    = 'Vorschlag nach der Erstellung gespeichert. Die Aktualisierung der %s Informationen wirkt sich nicht auf die zuvor erstellten Vorschläge für diese %s aus.';
$lang['proposal_sync_2_info']                    = 'Wenn vor kurzem die %s Info aktualisiert wurde, können alle neuen Daten mit den entsprechenden Vorschlägen synchronisiert werden. Hier ist eine Liste der Felder, die synchronisiert werden können.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Weitere Einzelheiten zur langen Beschreibung einfügen, die von dieser Ausgabe genommen wurden.';

# Version 1.4.0
$lang['calendar_events_limit']                              = 'Kalender Einträge Limit (monatliche und wöchentliche Ansicht)';
$lang['show_page_number_on_pdf']                            = 'Seitennummer auf PDF anzeigen';
$lang['customer_active_inactive_help']                      = 'Wird nicht beim Erstellen neuer Datensätze in Dropdowns angezeigt';
$lang['item_groups']                                        = 'Gruppen';
$lang['item_group']                                         = 'Gruppe';
$lang['item_group_name']                                    = 'Gruppenname';
$lang['new_item_group']                                     = 'Neue Gruppe';
$lang['show_setup_menu_item_only_on_hover']                 = 'Setup Menü nur anzeigen, wenn der Mauszeiger über dem Hauptmenü schwebt';
$lang['internal_article']                                   = 'Interner Artikel';
$lang['expenses_created_from_this_recurring_expense']       = 'Erstellte Ausgabe aus dieser wiederkehrenden Ausgabe';
$lang['convert_to_task']                                    = 'In Aufgabe umwandeln';
$lang['next_invoice_date']                                  = 'Nächstes Rechnungsdatum: %s';
$lang['next_expense_date']                                  = 'Nächstes Ausgabedatum: %s';
$lang['invoice_recurring_from']                             = 'Diese Rechnung wird aus wiederkehrender Rechnung mit folgender Nummer angelegt: %s';
$lang['expense_recurring_from']                             = 'Diese Ausgabe wird aus den folgenden wiederkehrenden Ausgabe erstellt: %s';
$lang['child_invoices']                                     = 'Untergeordnete Rechnungen';
$lang['child_expenses']                                     = 'Untergeordnete Ausgaben';
$lang['no_announcements']                                   = 'Keine Ankündigungen';
$lang['unit']                                               = 'Einheit';
$lang['permission_view_own']                                = 'Anzeigen (Eigene)';
$lang['permission_global']                                  = 'Global';
$lang['permission_customers_based_on_admins']               = 'Basierend auf Kundenadmin';
$lang['permission_payments_based_on_invoices']              = 'Basierend auf der "Rechnung Anzeigen (Eigene)" Berechtigung';
$lang['permission_projects_based_on_assignee']              = 'Wenn der Mitarbeiter nicht über die Berechtigung "Anzeigen (Global)" verfügt, werden nur Projekte angezeigt, in denen der Mitarbeiter als Projektmitglied hinzugefügt wurde.';
$lang['permission_tasks_based_on_assignee']                 = 'Wenn der Mitarbeiter nicht über die Berechtigung "Anzeigen (Global)" verfügt, werden nur Aufgaben angezeigt, denen er entweder folgt, er zugewiesen ist, wenn die Aufgaben öffentlich ist oder wenn die Option "Mitarbeitern erlauben alle Aufgaben zu einem zugewiesen Projekt einzusehen" unter "Setup->Einstellungen->Aufgaben" aktiviert ist.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Als Standard festgelegt';
$lang['paymentmethod_braintree_merchant_id']                = 'Händler ID';
$lang['paymentmethod_braintree_private_key']                = 'Privater Schlüssel';
$lang['paymentmethod_braintree_public_key']                 = 'Öffentlicher Schlüssel';
$lang['company_requires_vat_number_field']                  = 'USt-Nummer Feld für Unternehmen verpflichtend';
$lang['no_company_view_profile']                            = 'Person - Profil anzeigen';
$lang['company_is_required']                                = 'Firmen Feld erforderlich?';
$lang['estimate_invoiced']                                  = 'In Rechnung gestellt';
$lang['file_date_uploaded']                                 = 'Upload Datum';
$lang['allow_contact_to_delete_files']                      = 'Kontakten erlauben, eigene Dateien, die aus dem Kundenbereich hochgeladen wurden, zu löschen';
$lang['file']                                               = 'Datei';
$lang['customer_contact_person_only_one_allowed']           = 'Nur ein Kontakt ist erlaubt, wenn das Firmenfeld nicht ausgefüllt ist. Das System wird diesen Kunden als Person anlegen';
$lang['web_to_lead']                                        = 'Web zu Interessenten';
$lang['web_to_lead_form']                                   = 'Web zu Interessenten Formular';
$lang['new_form']                                           = 'Neues Formular';
$lang['form_name']                                          = 'Formularname';
$lang['cf_option_in_use']                                   = 'Eine Option, die entfernt wurde, ist in Verwendung und kann nicht entfernt werden. Die Option wird automatisch an die vorhandenen Optionen angehängt.';
$lang['form_builder']                                       = 'Formular Ersteller';
$lang['form_information']                                   = 'Formular Informationen & Einrichtung';
$lang['form_builder_create_form_first']                     = 'Es muss zuerst ein Formular erstellt werden, um den Formular Ersteller nutzen zu können.';
$lang['notify_assigned_user']                               = 'Verantwortliche Person';
$lang['form_recaptcha']                                     = 'Google Recaptcha benutzen';
$lang['form_lang_validation']                               = 'Sprache';
$lang['form_lang_validation_help']                          = 'Für die Validierungsnachricht';
$lang['form_btn_submit_text']                               = '"Absenden" Button Text';
$lang['form_success_submit_msg']                            = 'Nachricht, die bestätigt, dass das Formular erfolgreich abgeschickt wurde';
$lang['total_submissions']                                  = 'Insgesamt abgeschickt';
$lang['form_integration_code']                              = 'Code zum Einfügen';
$lang['not_lead_imported_from_form']                        = 'Neue Interessenten aus Web zu Interessenten Formular importiert - %s';
$lang['not_lead_activity_log_attachment']                   = 'Anhang wurde von dem Formular importiert - %s';
$lang['form_integration_code_help']                         = 'Den Code kopieren und überall in die Website einfügen, wo das Formular angezeigt werden soll. Zusätzlich kann die Breite und Höhe in px für die Webseite angepasst werden.';
$lang['invoice_not_found']                                  = 'Rechnung nicht gefunden';
$lang['estimate_not_found']                                 = 'Angebot nicht gefunden';
$lang['expense_not_found']                                  = 'Ausgabe nicht gefunden';
$lang['proposal_not_found']                                 = 'Vorschlag nicht gefunden';
$lang['new_task_assigned_non_user']                         = 'Dir wurde eine neue Aufgabe zugeteilt - %s';
$lang['no_child_found']                                     = 'Kein untergeordnetes Element %s gefunden';
$lang['company_vat_number']                                 = 'Steuernummer';
$lang['not_lead_assigned_from_form']                        = 'Dir wurde ein Interessent zugeteilt';
$lang['not_lead_activity_assigned_from_form']               = 'Interessent wurde %s zugeteilt';
$lang['form_allow_duplicate']                               = 'Erlauben Duplikat %s in die Datenbank einzufügen?';
$lang['track_duplicate_by_field']                           = 'Duplikate im Feld verhindern';
$lang['and_track_duplicate_by_field']                       = '+ Feld (leer lassen, um Duplikate nur in einem Feld zu beobachten)';
$lang['create_the_duplicate_form_data_as_task']             = 'Duplikat von %s Daten als Aufgabe erstellen und einen Verantwortlichen Mitarbeiter zuweisen';
$lang['create_the_duplicate_form_data_as_task_help']        = 'Verwendet für die weitere Überprüfung der Einreichung und Ergreifen notwendiger Maßnahmen';
$lang['currently_selected']                                 = 'Aktuell ausgewählt';
$lang['search_ajax_empty']                                  = 'Auswählen und anfangen zu tippen';
$lang['search_ajax_placeholder']                            = 'Tippen um zu suchen …';
$lang['search_ajax_searching']                              = 'Suchen …';
$lang['search_ajax_initialized']                            = 'Anfangen zu tippen um zu suchen';
$lang['lead_description']                                   = 'Beschreibung';
$lang['lead_website']                                       = 'Webseite';
$lang['invoice_activity_auto_converted_from_estimate']      = 'Rechnung automatisch erstellt von Angebot mit der Nummer %s';
$lang['hour_of_day_perform_auto_operations']                = 'Stunde des Tages, um automatische Aufgaben auszuführen';
$lang['hour_of_day_perform_auto_operations_format']         = '24 Stunden Format';
$lang['inv_hour_of_day_perform_auto_operations_help']       = 'Verwendet für wiederkehrende Rechnungen, überfällige Hinweise usw..';
$lang['use_minified_files']                                 = 'Verkleinerte Datei Versionen für CSS und JS verwenden (nur System Dateien)';

# Version 1.5.0
$lang['logo_favicon_changed_notice']       = 'Logo oder Favicon-Änderung erkannt. Wenn immer noch das ursprüngliche CRM-Logo angezeigt wird, sollte der Browser-Cache gelöscht werden';
$lang['kb_search_articles']                = 'Knowledgebase Artikel durchsuchen';
$lang['kb_search']                         = 'Suchen';
$lang['have_a_question']                   = 'Gibt es Fragen?';
$lang['card_expiration_year']              = 'Ablaufjahr';
$lang['card_expiration_month']             = 'Ablaufmonat';
$lang['client_website']                    = 'Webseite';
$lang['search_project_members']            = 'Nach Projektmitgliedern suchen…';
$lang['cf_translate_input_link_title']     = 'Titel';
$lang['cf_translate_input_link_url']       = 'URL';
$lang['cf_translate_input_link_tip']       = 'Hier klick, um einen Link hinzuzufügen';
$lang['task_edit_delete_timesheet_notice'] = 'Zeiterfassungsaufgabe ist %s, die Zeiterfassung kann nicht %s werden.';
$lang['department_username']               = 'IMAP Benutzername';
$lang['department_username_help']          = 'Nur ausfüllen, sollte der IMAP Server einen Benutzernamen statt einer E-Mail zum Login benutzen. Achtung: Es muss dennoch eine E-Mail Adresse angegeben werden!';
$lang['total_tickets_deleted']             = 'Insgesamt gelöschte Tickets: %s';

# Version 1.5.1
$lang['ticket_linked_to_project']                                = 'Dieses Ticket ist mit folgendem Projekt verknüpft: %s';
$lang['only_own_files_contacts']                                 = 'Kontakte sehen lediglich die eigenen Dateien, die in dem Kundenbereich hochgeladen wurden (Dateien, die im Kundenprofil hochgeladen wurden)';
$lang['only_own_files_contacts_help']                            = 'Wenn diese Datei manuell von einem Kundenprofil mit einem anderen Kontakt geteilt wird, haben diese die Berechtigung die Datei ebenfalls zu sehen.';
$lang['share_file_with']                                         = 'Datei teilen mit';
$lang['file_share_visibility_notice']                            = 'Diese Datei ist nicht mit anderen Kontakten geteilt, Sichtbarkeit erneut ändern, um neu zuladen';
$lang['share_file_with_show']                                    = 'Diese Datei ist geteilt mit: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Primären Kontakt erlauben, die Zahlungs- und Rechnungsinformationen einzusehen und zu ändern';
$lang['estimate_due_after']                                      = 'Angebot überfällig nach (Tagen)';

# Version 1.6.0
$lang['my_timesheets']                                   = 'Meine Zeiterfassung';
$lang['today']                                           = 'Heute';
$lang['open_in_dropbox']                                 = 'In Dropbox öffnen';
$lang['show_primary_contact']                            = 'Den vollen Namen des Hauptkontakt auf %s anzeigen';
$lang['view_members_timesheets']                         = 'Alle Zeiterfassungen anzeigen';
$lang['priority']                                        = 'Priorität';
$lang['fetch_from_google']                               = 'Von Google abrufen';
$lang['customer_fetch_lat_lng_usage']                    = 'Adresse, Stadt und Land vor dem Abrufen ausfüllen, um das bestes Ergebnis zu erzielen.';
$lang['g_search_address_not_found']                      = 'Die Adresse konnte nicht gefunden werden, bitte erneut versuchen';
$lang['proposals_report']                                = 'Vorschlagsbericht';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'Wenn der Mitarbeiter nicht über die Ansehen-Berechtigung für Kunden verfügt, kann er nur neue Tickets für Kunden aus dem Admin-Bereich an anlegen, denen er als Kunden-Administrator zugewiesen ist.';
$lang['staff_members_open_tickets_to_all_contacts']      = 'Mitarbeitern erlauben, für jeden Kontakt ein Ticket zu eröffnen';
$lang['charts_based_report']                             = 'Diagramm basierter Bericht';
$lang['responsible_admin']                               = 'Zuständiger Admin';
$lang['tags']                                            = 'Tags';
$lang['tag']                                             = 'Tag';
$lang['customer_map_notice']                             = 'Koordinaten im Kundenprofil hinzufügen, um die Karte hier anzuzeigen';
$lang['default_view']                                    = 'Standard Ansicht';
$lang['day']                                             = 'Tag';
$lang['agenda']                                          = 'Agenda';
$lang['timesheet_tags']                                  = 'Zeiterfassung Tags';
$lang['show_more']                                       = 'Mehr anzeigen';
$lang['show_less']                                       = 'Weniger anzeigen';
$lang['project_completed_date']                          = 'Abschlussdatum';
$lang['language']                                        = 'Sprache';
$lang['this_week']                                       = 'Diese Woche';
$lang['last_week']                                       = 'Letzte Woche';
$lang['this_month']                                      = 'Dieser Monat';
$lang['last_month']                                      = 'Letzter Monat';
$lang['no_description_project']                          = 'Keine Beschreibung für dieses Projekt verfügbar';
$lang['sales_string']                                    = 'Verkäufe';
$lang['no_project_members']                              = 'Diesem Projekt ist kein Mitglied zugewiesen';
$lang['search_by_tags']                                  = 'Benutze # + Tagname, um nach Tags zu suchen';
$lang['project_status_5']                                = 'Abgebrochen';

# Version 1.7.0
$lang['not_activity_new_reminder_created']        = 'eine neue Erinnerung für %s mit dem Datum %s erstellen';
$lang['not_activity_new_task_created']            = 'Hat eine neue Aufgabe erstellt - %s';
$lang['recurring_invoice_draft_notice']           = 'Diese Rechnung hat den Status Entwurf und muss als gesendet markiert werden. Wiederkehrende Rechnungen mit dem Status Entwurf werden nicht durch Cron Job neu erstellt.';
$lang['recurring_recreate_hour_notice']           = '%s wird zu einer bestimmten Stunde des Tages erstellt basierend auf der Einstellung unter Einstellungen->Cron-Job befindet';
$lang['invoice_project_include_timesheets_notes'] = 'Jede Timesheet-Bemerkung in der Artikelbeschreibung einfügen';
$lang['events']                                   = 'Veranstaltungen';
$lang['clear']                                    = 'Zurücksetzen';
$lang['auto_mark_as_public']                      = 'Automatisch als öffentlich markieren';
$lang['time_format']                              = 'Zeitformat';
$lang['time_format_24']                           = '24 Stunden';
$lang['time_format_12']                           = '12 Stunden';
$lang['delete_activity_log_older_then']           = 'System Aktivitätslogs älter als x Monate löschen';
$lang['mark_as_read']                             = 'Als gelesen markieren';
$lang['mark_all_as_read']                         = 'Alle als gelesen markieren';
$lang['tax_1']                                    = 'Steuer 1';
$lang['tax_2']                                    = 'Steuer 2';
$lang['total_with_tax']                           = 'Insgesamt mit Steuern';
$lang['new_task_auto_assign_current_member']      = 'Automatisch den Task-Ersteller zuweisen, wenn eine neue Aufgabe angelegt wird';
$lang['new_task_auto_assign_current_member_help'] = 'Wird nicht angewendet, wenn die Aufgabe mit dem Projekt verknüpft ist und der Ersteller kein Projektmitglied ist';
$lang['copy_project_tasks_status']                = 'Aufgaben Status';
$lang['tasks_summary']                            = 'Aufgaben Zusammenfassung';
$lang['vault']                                    = 'Tresor';
$lang['new_vault_entry']                          = 'Neuer Tresor Eintrag';
$lang['server_address']                           = 'Server Adresse';
$lang['port']                                     = 'Port';
$lang['vault_username']                           = 'Benutzername';
$lang['vault_password']                           = 'Passwort';
$lang['vault_description']                        = 'Kurze Beschreibung';
$lang['vault_entry']                              = 'Tresor Eintrag';
$lang['no_port_provided']                         = 'Nicht angegeben';
$lang['view_password']                            = 'Passwort anzeigen';
$lang['security_reasons_re_enter_password']       = 'Das Passwort muss aus Sicherheitsgründen bestätigt werden';
$lang['password_change_fill_notice']              = 'Passwort Feld nur ausfüllen, wenn es geändert werden soll';
$lang['vault_password_user_not_correct']          = 'Passwort falsch, bitte erneut versuchen';
$lang['no_vault_entries']                         = 'Tresor-Einträge konnten für diesen Kunden nicht gefunden werden';
$lang['vault_entry_created_from']                 = 'Dieser Eintrag wurde erstellt von %s';
$lang['vault_entry_last_update']                  = 'Zuletzt aktualisiert von %s';
$lang['vault_entry_visible_to_all']               = 'Sichtbar für alle Mitarbeiter, die Zugang zu diesem Kunden haben';
$lang['vault_entry_visible_creator']              = 'Nur für mich sichtbar (Administrator sind nicht ausgeschlossen)';
$lang['vault_entry_visible_administrators']       = 'Nur für Administratoren sichtbar';
$lang['my_reminders']                             = 'Meine Erinnerungen';
$lang['reminder_related']                         = 'Bezüglich';
$lang['event_notification']                       = 'Benachrichtigungen';
$lang['days']                                     = 'Tage';
$lang['reminder_notification_placeholder']        = 'z.B. vor 30 Minuten';
$lang['event_color']                              = 'Event Farbe';
$lang['group_by_task']                            = 'Nach Aufgaben gruppieren';
$lang['save']                                     = 'Speichern';
$lang['disable_languages']                        = 'Sprachen deaktivieren';

# Version 1.8.0
$lang['not_customer_viewed_invoice']                         = 'Die Rechnung %s wurde eingesehen';
$lang['not_customer_viewed_estimate']                        = 'Das Angebot %s wurde eingesehen';
$lang['not_customer_viewed_proposal']                        = 'Der Vorschlag %s wurde eingesehen';
$lang['display_inline']                                      = 'Inline anzeigen';
$lang['email_header']                                        = 'Vordefinierter Header';
$lang['email_footer']                                        = 'Vordefinierter Footer';
$lang['exclude_proposal_from_client_area_with_draft_status'] = 'Vorschläge mit Entwurfsstatus aus dem Kundenbereich ausschließen';
$lang['pusher_app_key']                                      = 'APP Schlüssel';
$lang['pusher_app_secret']                                   = 'APP Secret';
$lang['pusher_app_id']                                       = 'APP ID';
$lang['pusher_cluster_notice']                               = 'Leer lassen, um das Standard Cluster zu verwenden.';
$lang['pusher_enable_realtime_notifications']                = 'Echtzeitbenachrichtigungen aktivieren';
$lang['task_is_overdue']                                     = 'Diese Aufgabe ist überfällig';
$lang['this_year']                                           = 'Dieses Jahr';
$lang['last_year']                                           = 'Letztes Jahr';
$lang['customer_statement']                                  = 'Abrechnung';
$lang['customer_statement_for']                              = 'Abrechnung für %s';
$lang['account_summary']                                     = 'Kontoübersicht';
$lang['statement_beginning_balance']                         = 'Anfangsbestand';
$lang['invoiced_amount']                                     = 'In Rechnung gestellter Betrag';
$lang['amount_paid']                                         = 'Bezahlter Betrag';
$lang['statement_from_to']                                   = '%s zu %s';
$lang['customer_statement_info']                             = 'Zeige alle Rechnungen und Zahlungen zwischen %s und %s';
$lang['balance_due']                                         = 'Saldo fällig';
$lang['statement_heading_date']                              = 'Datum';
$lang['statement_heading_details']                           = 'Details';
$lang['statement_heading_amount']                            = 'Betrag';
$lang['statement_heading_payments']                          = 'Zahlungen';
$lang['statement_heading_balance']                           = 'Saldo';
$lang['statement_invoice_details']                           = 'Rechnung %s - fällig am %s';
$lang['statement_payment_details']                           = 'Zahlung (%s) für Rechnung %s';
$lang['statement_bill_to']                                   = 'An';
$lang['send_to_email']                                       = 'An E-Mail senden';
$lang['statement_sent_to_client_success']                    = 'Die Abrechnung wurde erfolgreich an den Kunden gesendet';
$lang['statement_sent_to_client_fail']                       = 'Abrechnung konnte nicht gesendet werden';
$lang['view_account_statement']                              = 'Konto Abrechnungen anzeigen';
$lang['text_not_recommended_for_servers_limited_resources']  = 'Nicht empfohlen, wenn der Server über begrenzte Ressourcen verfügt (z.B. gemeinsam genutztes Hosting)';
$lang['tasks_bull_actions_assign_notice']                    = 'Wenn die Aufgabe mit dem Projekt verknüpft ist und der Mitarbeiter, der dieser Aufgabe zuordnet wurde kein Projektmitglied ist, wird der Mitarbeiter automatisch als Mitglied zu dem Projekt hinzugefügt.';
$lang['company_information']                                 = 'Firmeninformationen';
$lang['ticket_form']                                         = 'Ticket Formular';
$lang['ticket_form_subject']                                 = 'Betreff';
$lang['ticket_form_name']                                    = 'Name';
$lang['ticket_form_email']                                   = 'E-Mail Adresse';
$lang['ticket_form_department']                              = 'Abteilung';
$lang['ticket_form_message']                                 = 'Nachricht';
$lang['ticket_form_priority']                                = 'Priorität';
$lang['ticket_form_service']                                 = 'Service';
$lang['ticket_form_submit']                                  = 'Absenden';
$lang['ticket_form_attachments']                             = 'Anhänge';
$lang['success_submit_msg']                                  = 'Danke, dass Sie uns kontaktiert haben. Wir werden so bald wie möglich antworten.';
$lang['vault_entry_share_on_projects']                       = 'Diesen Tresor-Eintrag in Projekte mit Projektmitgliedern teilen';
$lang['project_shared_vault_entry_login_details']            = 'Kunden-Login anzeigen';
$lang['iso_code']                                            = 'ISO Code';
$lang['estimates_not_invoiced']                              = 'Nicht abgerechnet';
$lang['show_on_ticket_form']                                 = 'In Ticket Formular anzeigen';
$lang['cancel_upload']                                       = 'Upload abbrechen';
$lang['show_table_export_button']                            = '"Tabelle exportieren" Button anzeigen';
$lang['show_table_export_all']                               = 'Allen Mitarbeiter';
$lang['show_table_export_admins']                            = 'Nur Administratoren';
$lang['show_table_export_hide']                              = 'Button für alle Mitarbeiter deaktivieren';
$lang['task_created_by']                                     = 'Erstellt von %s';
$lang['validation_extension_not_allowed']                    = 'Dateiendung nicht erlaubt';
$lang['allow_staff_view_proposals_assigned']                 = 'Mitarbeitern erlauben Vorschläge zu sehen, in denen diese zugeordnet sind';
$lang['task_users_working_on_tasks_multiple']                = 'Momentan arbeiten %s an dieser Aufgabe';
$lang['task_users_working_on_tasks_single']                  = 'Momentan arbeitet %s an dieser Aufgabe';

# Version 1.9.0
$lang['estimated_hours']                               = 'Geschätzte Stunden';
$lang['two_factor_auth_failed_to_send_code']           = 'Fehler beim Senden des Zwei-Faktor-Authentifizierungsschlüssel per E-Mail. Die SMTP-Einstellungen sind möglicherweise nicht ordnungsgemäß konfiguriert';
$lang['two_factor_auth_code_sent_successfully']        = 'Eine E-Mail mit dem Bestätigungscode wurde an %s gesendet.';
$lang['enable_two_factor_authentication']              = 'Zwei-Faktor-Authentifizierung aktivieren';
$lang['two_factor_authentication_info']                = 'Die Zwei-Faktor-Authentifizierung wird per E-Mail zur Verfügung gestellt. Vor dem Aktivieren sollte sicher gestellt sein, dass die SMTP-Einstellungen ordnungsgemäß konfiguriert sind und das System in der Lage ist, eine E-Mail zu senden. Ein einmaliger Authentifizierungsschlüssel wird bei der Anmeldung per E-Mail verschickt.';
$lang['timesheets_overview_all_members_notice_admins'] = 'Zeiterfassungsübersicht für alle Mitarbeiter ist nur für Administratoren verfügbar.';
$lang['two_factor_authentication']                     = 'Zwei-Faktor-Authentifizierung';
$lang['two_factor_authentication_code']                = 'Schlüssel';
$lang['admin_two_factor_auth_heading']                 = 'Authentifizierungsschlüssel';
$lang['two_factor_code_not_valid']                     = 'Authentifizierungsschlüssel ist nicht gültig';
$lang['back_to_login']                                 = 'Zurück zum Login';
$lang['enter_activity']                                = 'Aktivität eingeben';
$lang['attach_files']                                  = 'Dateien anhängen';
$lang['no_tags_used']                                  = 'Es werden keine Tags vom System genutzt';
$lang['exclude_completed_tasks']                       = 'Abgeschlossene Aufgaben ausschließen';
$lang['modal_width_class']                             = 'Popup Breite (Klasse)';
$lang['contract_copy']                                 = 'Kopieren';
$lang['contract_copied_successfully']                  = 'Vertrag erfolgreich kopiert';
$lang['contract_copied_fail']                          = 'Fehler beim Kopieren des Vertrages';
$lang['project_marked_as_finished_to_contacts']        = '<b>Projekt als abgeschlossen markiert</b>-E-Mail an Kundenkontakt senden';
$lang['only_admins']                                   = 'Nur Administratoren';
$lang['new_notification']                              = 'Neue Benachrichtigung!';
$lang['enable_desktop_notifications']                  = 'Desktop-Benachrichtigungen aktivieren';
$lang['save_and_send']                                 = 'Speichern und Senden';
$lang['private']                                       = 'Privat';
$lang['task_created_at']                               = 'Erstellt in %s';
$lang['hide_notified_reminders_from_calendar']         = 'Bereits gemeldete Erinnerungen aus dem Kalender ausblenden';
$lang['last_active']                                   = 'Letzte Aktivität';
$lang['open_ticket']                                   = 'Offene Tickets';
$lang['task_add_description']                          = 'Beschreibung hinzufügen';
$lang['project_setting_create_tasks']                  = 'Aufgaben erstellen';
$lang['project_setting_edit_tasks']                    = 'Aufgaben bearbeiten (nur Aufgaben, die vom Kontakt erstellt wurden)';

# Version 1.9.2
$lang['items_report']                            = 'Vorlagen Report';
$lang['reports_item']                            = 'Vorlage';
$lang['quantity_sold']                           = 'Verkaufte Menge';
$lang['total_amount']                            = 'Gesamtmenge';
$lang['avg_price']                               = 'Durchschnittspreis';
$lang['item_report_paid_invoices_notice']        = 'Der Vorlagen Report wird nur aus bezahlten Rechnungen vor Rabatten und Steuern generiert.';
$lang['overview']                                = 'Übersicht';
$lang['timer_started_change_status_in_progress'] = 'Taskstatus auf "In Bearbeitung" ändern, wenn der Timer gestartet wurde (nur anwendbar, wenn Taskstatus "Nicht Gestartet" ist)';
$lang['company_info_format']                     = 'Firmen Informationsformat (PDF und HTML)';
$lang['customer_info_format']                    = 'Kunden Informationsformat (PDF und HTML)';
$lang['custom_field_info_format_embed_info']     = 'Benutzerdefinierte Felder für %s können einfach in PDF- und HTML-Dokumente eingebettet werden, indem die Platzhalter auf der folgenden Seite in das Seitenformat einfügt werden: %s';
$lang['transfer_lead_notes_to_customer']         = 'Interessenten Notizen in das Kundenprofil übertragen';
$lang['authorized_signature_text']               = 'Autorisierte Unterschrift';
$lang['show_pdf_signature_invoice']              = 'PDF-Signatur auf Rechnung anzeigen';
$lang['show_pdf_signature_estimate']             = 'PDF-Signatur auf Kostenvoranschlag anzeigen';
$lang['signature']                               = 'Unterschrift';
$lang['signature_image']                         = 'Unterschrift Bild';
$lang['insert_checklist_templates']              = 'Checklistenvorlagen einfügen';
$lang['save_as_template']                        = 'Als Vorlage speichern';
$lang['invoice_item_add_edit_rate_currency']     = 'Rate - %s';
$lang['total_files_deleted']                     = 'Insgesamt gelöschte Dateien: %s';
$lang['invalid_transaction']                     = 'Ungültige Transaktion. Bitte erneut versuchen.';
$lang['payment_gateway_payu_money_key']          = 'PayU Money Schlüssel';
$lang['payment_gateway_payu_money_salt']         = 'PayU Money Salt';
$lang['settings_paymentmethod_description']      = 'Gateway Dashbord Zahlungsbeschreibung';

# Version 1.9.3
$lang['default_ticket_reply_status']          = 'Standardstatus beim Antworten auf ein Ticket ausgewählt';
$lang['ticket_add_response_and_back_to_list'] = 'Zurück zur Ticketliste nach Absenden der Antwort';

# Version 1.9.4
$lang['default_task_status']                               = 'Standardstatus beim Anlegen einer neuen Aufgabe';
$lang['custom_field_pdf_html_help']                        = 'Das ' . $lang['custom_field_show_on_client_portal'] . ' Feld aktivieren, wenn die benutzerdefinierten Felder im Kundenbereich, wenn Kunden eine PDF herrunterlädt oder ein PDF per E-Mail erhält angezeigt werden sollen.';
$lang['auto']                                              = 'Auto';
$lang['email_queue']                                       = 'E-Mail-Warteschlange';
$lang['email_queue_enabled']                               = 'E-Mail-Warteschlange aktivieren';
$lang['email_queue_skip_attachments']                      = 'Keine E-Mails mit Anhängen in die Warteschlange hinzufügen.';
$lang['disable']                                           = 'Deaktivieren';
$lang['enable']                                            = 'Aktivieren';
$lang['auto_dismiss_desktop_notifications_after']          = 'Desktop-Benachrichtigungen nach X Sekunden automatisch ausblenden (0 für Deaktivierung)';
$lang['proposal_info_format']                              = 'Format der Vorschlagsinfo (PDF und HTML)';
$lang['hide_tasks_on_main_tasks_table']                    = 'Projektaufgaben in der Tabelle der Hauptaufgaben ausblenden (Admin-Bereich)';
$lang['ticket_replies_order']                              = 'Ticket Antworten Reihenfolge';
$lang['ticket_replies_order_notice']                       = 'Die Ticket-Anfangsnachricht wird immer als erste angezeigt.';
$lang['invoice_cancelled_email_disabled']                  = 'Diese Rechnung wurde zurückgenommen. Rückgängig machen, um E-Mail an den Kunden zu aktivieren';
$lang['email_notifications']                               = 'E-Mail Benachrichtigungen';
$lang['invoice_activity_record_payment_email_to_customer'] = 'Zahlung aufgezeichnet, E-Mail gesendet an: %s';
$lang['exclude_inactive']                                  = 'Inaktive ausschließen';
$lang['disable_all']                                       = 'Alle deaktivieren';
$lang['enable_all']                                        = 'Alle aktivieren';
$lang['reccuring_invoice_option_gen_and_send']             = 'Erstellen und automatisches Versenden der erneuerten Rechnung an den Kunden';
$lang['reccuring_invoice_option_gen_unpaid']               = 'Unbezahlte Rechnung erstellen';
$lang['reccuring_invoice_option_gen_draft']                = 'Entwurfsrechnung erstellen';
$lang['event_created_by']                                  = 'Dieses Ereignis wurde erstellt von %s';

# Version 1.9.5
$lang['customers_assigned_to_me']              = 'Mir zugeordnete Kunden';
$lang['bcc_all_emails']                        = 'BCC Alle E-Mails an';
$lang['confirmation_of_identity']              = 'Bestätigung der Identität';
$lang['accept_identity_confirmation']          = 'Identitätsbestätigung beim Akzeptieren anfordern';
$lang['accepted_identity_info']                = 'Diese %s wurde von %s am %s von der IP-Adresse %s akzeptiert.';
$lang['clear_this_information']                = 'Diese Informationen löschen';
$lang['new_task_auto_follower_current_member'] = 'Automatisches Hinzufügen des Aufgabenerstellers als Aufgabenverfolger, wenn eine neue Aufgabe erstellt wird.';
$lang['expenses_report_net']                   = 'Nettobetrag (Zwischensumme)';
$lang['expense_field_billable_help']           = 'Wenn abrechenbar, kann %s zur langen Beschreibung der Rechnung hinzugefügt werden.';
$lang['task_biillable_checked_on_creation']    = 'Abrechnungsfähig Option ist standardmäßig aktiviert, wenn neue Aufgabe erstellt wird?';
$lang['pause_overdue_reminders']               = 'Mahnungen pausieren';
$lang['resume_overdue_reminders']              = 'Mahnungen fortsetzen';
# Credit Notes
$lang['credit_notes']                                            = 'Gutschriften';
$lang['credit_note']                                             = 'Gutschrift';
$lang['credit_note_lowercase']                                   = 'Gutschrift';
$lang['credit_note_not_found']                                   = 'Gutschrift nicht gefunden';
$lang['credit_note_date']                                        = 'Gutschrift Datum';
$lang['credit_date']                                             = 'Datum';
$lang['settings_sales_next_credit_note_number']                  = 'Nächste Gutschriftsnummer';
$lang['credit_note_number_prefix']                               = 'Gutschriftsnummer Präfix';
$lang['credit_note_number']                                      = 'Gutschrift #';
$lang['credit_note_number_exists']                               = 'Gutschriftsnummer ist bereits vergeben';
$lang['show_shipping_on_credit_note']                            = 'Versanddetails auf der Gutschrift anzeigen';
$lang['credit_note_number_decrement_on_delete']                  = 'Gutschriftsnummer beim Löschen dekrementieren.';
$lang['credit_note_number_decrement_on_delete_help']             = 'Die Nummer wird nur dekrementiert, wenn es sich um die neueste Gutschrift handelt.';
$lang['credit_note_status']                                      = 'Status';
$lang['credit_note_status_open']                                 = 'Offen';
$lang['credit_note_status_closed']                               = 'Abgeschlossen';
$lang['credit_note_status_void']                                 = 'Ungültig';
$lang['credit_note_mark_as_open']                                = 'Als offen markieren';
$lang['new_credit_note']                                         = 'Gutschrift erstellen';
$lang['credit_note_amount']                                      = 'Betrag';
$lang['credit_note_remaining_credits']                           = 'Restbetrag';
$lang['credit_note_client_note']                                 = 'Anmerkung';
$lang['invoices_credited']                                       = 'Gutgeschriebene Rechnungen';
$lang['apply_credits']                                           = 'Gutschriften anwenden';
$lang['x_credits_available']                                     = '%s Guthaben verfügbar.';
$lang['credit_amount']                                           = 'Gutschrift Betrag';
$lang['credits_available']                                       = 'Verfügbare Guthaben';
$lang['amount_to_credit']                                        = 'Gutschriftbetrag verwenden';
$lang['invoice_credits_applied']                                 = 'Gutschriften erfolgreich auf Rechnung angewandt';
$lang['applied_credits']                                         = 'Verwendetes Guthaben';
$lang['credit_amount_bigger_then_invoice_balance']               = 'Der Gesamtbetrag des Guthabens ist größer als der fällige Rechnungsbetrag.';
$lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Der Gesamtbetrag des Guthabens ist größer als der Restbetrag des Guthabens.';
$lang['credited_invoices_not_found']                             = 'Gutgeschriebene Rechnungen nicht gefunden';
$lang['credit_invoice_number']                                   = 'Rechnungsnummer';
$lang['credits_used']                                            = 'Verwendetes Guthaben';
$lang['credits_remaining']                                       = 'Restliches Guthaben';
$lang['amount_credited']                                         = 'Gutgeschriebener Betrag';
$lang['credits_applied_cant_delete_status_closed']               = 'Diese Gutschrift hat den Status Geschlossen, Es muss zuerst das Guthaben gelöscht werden, um die Gutschrift zu löschen.';
$lang['credits_applied_cant_delete_credit_note']                 = 'Diese Gutschrift hat Guthaben, es muss zuerst das Guthaben gelöscht werden, um die Gutschrift zu löschen.';
$lang['credit_note_pdf_heading']                                 = 'GUTSCHRIFT';
$lang['show_status_on_pdf']                                      = 'Anzeige des %s-Status auf PDF-Dokumenten';
$lang['show_pdf_signature_credit_note']                          = 'PDF-Signatur auf Gutschrift anzeigen';
$lang['calendar_credit_note_reminder']                           = 'Gutschrift-Erinnerung';
$lang['show_credit_note_reminders_on_calendar']                  = 'Gutschriftserinnerungen';
$lang['reminders']                                               = 'Erinnerungen';
$lang['invoice_activity_applied_credits']                        = 'hat Guthaben von %s aus %s angewendet ';
$lang['create_credit_note']                                      = 'Gutschrift erstellen';
$lang['confirm_invoice_credits_from_credit_note']                = 'Bei der Erstellung von Gutschriften aus nicht bezahlten Rechnungen wird der Gutschriftsbetrag auf diese Rechnung angerechnet. Sicher, dass die Gutschrift erstellt werden soll?';
$lang['credit_invoice_date']                                     = 'Rechnungsdatum';
$lang['apply_to_invoice']                                        = 'Auf Rechnung anwenden';
$lang['apply_credits_from']                                      = 'Guthaben von %s anwenden';
$lang['credits_successfully_applied_to_invoices']                = 'Rechnungsguthaben erfolgreich eingesetzt';
$lang['credit_note_send_to_client_modal_heading']                = 'Gutschrift an Kunden senden';
$lang['credit_note_sent_to_client_success']                      = 'Gutschrift wurde erfolgreich an den Kunden gesendet';
$lang['credit_note_sent_to_client_fail']                         = 'Problem beim Versenden von der Gutschrift per E-Mail';
$lang['credit_note_no_invoices_available']                       = 'Für diesen Kunden liegen keine Rechnungen vor.';
$lang['show_total_paid_on_invoice']                              = 'Gesamtzahlungsbetrag auf Rechnung anzeigen';
$lang['show_credits_applied_on_invoice']                         = 'Angewandtes Guthaben auf Rechnung anzeigen';
$lang['show_amount_due_on_invoice']                              = 'Fälligen Betrag auf Rechnung anzeigen';
$lang['customer_profile_update_credit_notes']                    = 'Die Versand-/Rechnungsadresse auf allen vorherigen Gutschriften aktualisieren (geschlossene Gutschriften sind nicht betroffen).';
$lang['zip_credit_notes']                                        = 'ZIP Gutschriften';
$lang['statement_credit_note_details']                           = 'Gutschrift %s';
$lang['statement_credits_applied_details']                       = 'Guthaben aus Gutschrift %s - %s für Zahlung von %s verwendet';
$lang['credit_note_files']                                       = 'Gutschriftsdateien';
$lang['credit_notes_report']                                     = 'Gutschriftenbericht';

$lang['credit_note_set_reminder_title']     = 'Gutschriftenerinnerung erstellen';
$lang['credit_note_add_edit_client_note']   = $lang['invoice_add_edit_client_note'];
$lang['credit_note_bill_to']                = $lang['invoice_bill_to'];
$lang['credit_note_prefix']                 = $lang['settings_sales_invoice_prefix'];
$lang['credit_note_admin_note']             = $lang['invoice_add_edit_admin_note'];
$lang['credit_note_total']                  = $lang['invoice_total'];
$lang['credit_note_adjustment']             = $lang['invoice_adjustment'];
$lang['credit_note_discount']               = $lang['invoice_discount'];
$lang['credit_note_subtotal']               = $lang['invoice_subtotal'];
$lang['credit_note_table_quantity_heading'] = $lang['invoice_table_quantity_heading'];
$lang['credit_note_table_hours_heading']    = $lang['invoice_table_hours_heading'];
$lang['credit_note_table_item_heading']     = $lang['invoice_table_item_heading'];
$lang['credit_note_table_item_description'] = $lang['invoice_table_item_description'];
$lang['credit_note_table_rate_heading']     = $lang['invoice_table_rate_heading'];
$lang['credit_note_table_tax_heading']      = $lang['invoice_table_tax_heading'];
$lang['credit_note_table_amount_heading']   = $lang['invoice_table_amount_heading'];
$lang['credit_notes_list_all']              = $lang['invoices_list_all'];

# Version 1.9.7
$lang['ticket_assigned']                          = 'Zugewiesen';
$lang['dashboard_options']                        = 'Dashboard Optionen';
$lang['reset_dashboard']                          = 'Dashboard zurücksetzen';
$lang['widgets']                                  = 'Widgets';
$lang['s_chart']                                  = '%s Diagramm';
$lang['quick_stats']                              = 'Schnelle Statistik';
$lang['user_widget']                              = 'Benutzer Widget';
$lang['widgets_visibility_help_text']             = 'Widgets, die nur angezeigt werden, wenn genügend Daten vorhanden sind, können nicht ein- oder ausgeblendet werden.';
$lang['show_project_on_estimate']                 = 'Projektname auf Angebot anzeigen';
$lang['show_project_on_invoice']                  = 'Projektname auf Rechnung anzeigen';
$lang['show_project_on_credit_note']              = 'Projektname auf Gutschrift anzeigen';
$lang['visible_tabs']                             = 'Sichtbare Tabs';
$lang['all']                                      = 'Alle';
$lang['view_widgetable_area']                     = 'Widgetable-Bereich anzeigen';
$lang['hide_widgetable_area']                     = 'Widgetable-Bereich ausblenden';
$lang['no_items_warning']                         = 'Mindestens eine Position eingeben.';
$lang['item_forgotten_in_preview']                = 'Vergessen, diesen Artikel hinzuzufügen?';
$lang['not_task_status_changed']                  = '%s - Task Status wurde geändert auf %s';
$lang['not_project_activity_task_status_changed'] = 'Task-Status geändert';
$lang['reset']                                    = 'Zurücksetzen';
$lang['save_message_as_predefined_reply']         = 'Nachricht als vordefinierte Antwort speichern';
$lang['inline_create_option']                     = 'Nicht-Administratoren erlauben, %s im %s-Bereich zu erstellen/bearbeiten?';
$lang['inline_create']                            = 'Inline Erstellen';
$lang['inline_create_option_predefined_replies']  = 'Nicht-Administratoren erlauben, vordefinierte Antworten aus der Ticketnachricht zu speichern.';
$lang['reminders_view_none_admin']                = 'Zeigt Ihre Erinnerungen und Erinnerungen, die du selbst erstellt hast.';
$lang['show_tabs_and_options']                    = 'Tabs und Optionen anzeigen';
$lang['no_milestones_found']                      = 'Dieses Projekt hat keine Meilensteine';
$lang['lead_is_contact_create_task']              = 'Aufgabe anlegen, wenn E-Mail-Absender bereits Kunde ist und dem zuständigen Mitarbeiter zuordnen.';
$lang['existing_customer']                        = 'Bestehender Kunde';
$lang['use_company_name_instead']                 = 'Stattdessen Firmenname verwenden';
$lang['customer_delete_transactions_warning']     = 'Dieser Kunde hat Transaktionen, %s, die Transaktionen müssen gelöscht oder zu einem anderen Kunden verschoben werden, um diese Aktion durchzuführen.';

# Version 1.9.8
$lang['sending_email_contact_permissions_warning'] = 'Die automatische Auswahl von Kundenkontakten ist fehlgeschlagen. Vergewissere dich, dass der Kunde über aktive Kontakte verfügt und die zugehörigen Kontakte mit E-Mail-Benachrichtigungen für %s aktiviert sind.';
$lang['help_leads_create_permission']              = 'Alle Mitarbeiter können Leads erstellen, mit Ausnahme derjenigen, die nicht als Mitarbeiter markiert sind.';
$lang['help_leads_edit_permission']                = 'Jeder, der Zugang zu einem bestimmten Lead hat, kann fast alle Lead-Informationen bearbeiten.';
$lang['triggers']                                  = 'Auslöser';
$lang['notice_only_one_active_sms_gateway']        = 'Es ist nur ein aktives SMS-Gateway erlaubt.';
$lang['sms_trigger_disable_tip']                   = 'Den Inhalt leer lassen, um bestimmte Trigger zu deaktivieren.';
$lang['tables']                                    = 'Tabellen';
$lang['only_project_tasks']                        = 'Nur projektbezogene Aufgaben';
$lang['download_all']                              = 'Alle herunterladen';
$lang['settings_sales_credit_note_number_format']  = 'Gutschriftsnummernformat';
$lang['sms_reminder_sent_to']                      = 'SMS-Erinnerung an %s gesendet';
$lang['ideal_customer_statement_descriptor']       = 'Kontoauszugsbeschreibung (wird im Kontoauszug des Kunden angezeigt)';
$lang['payment_received_awaiting_confirmation']    = 'Ihre Zahlung ist eingegangen und wartet auf eine Bestätigung.';
$lang['discount_fixed_amount']                     = 'Fester Betrag';
$lang['timesheet_duration_instead']                = 'Stattdessen die Zeitdauer eingeben';
$lang['timesheet_date_instead']                    = 'Stattdessen die Start- und Endzeit festlegen';
$lang['allow_non_admin_members_to_import_leads']   = 'Nicht-Mitarbeiter können Leads importieren';
$lang['project_hide_tasks_settings_info']          = 'Aufgaben werden aus der Tabelle der Hauptaufgaben für dieses Projekt ausgeschlossen. Nur in diesem Bereich können die Projektaufgaben eingesehen werden.';

# Version 1.9.9
$lang['ticket_create_no_contact']            = 'Ticket ohne Kontakt';
$lang['ticket_create_to_contact']            = 'Ticket zum Kontakt';
$lang['showing_billable_tasks_from_project'] = 'Anzeige abrechenbarer Aufgaben aus dem Projekt';
$lang['no_billable_tasks_found']             = 'Abrechenbare Aufgaben nicht gefunden';
$lang['help_leads_permission_view']          = 'Wenn diese Berechtigung nicht aktiviert ist, kann ein Mitarbeiter nur die Leads einsehen, denen er zugeordnet ist, die von ihm erstellt wurden und die als öffentlich gekennzeichnet sind.';

# Version 2.0.0
$lang['customers']                                              = $lang['clients'];
$lang['knowledge_base']                                         = $lang['kb_string'];
$lang['staff']                                                  = $lang['als_staff'];
$lang['checklist_templates']                                    = 'Task Checklist Templates';
$lang['emails_tracking']                                        = 'Emails Tracking';
$lang['no_tracked_emails_sent']                                 = 'Keine nachverfolgbaren E-Mails gesendet';
$lang['tracked_emails_sent']                                    = 'Tracked Emails Sent';
$lang['tracked_email_date']                                     = 'Datum';
$lang['tracked_email_subject']                                  = 'Thema';
$lang['tracked_email_to']                                       = 'An';
$lang['tracked_email_opened']                                   = 'Geöffnet';
$lang['tracked_email_not_opened']                               = 'Nicht geöffnet';
$lang['not_viewed_yet']                                         = 'Dieser %s wurde noch nicht vom Kunden angesehen.';
$lang['undo']                                                   = 'Rückgängig';
$lang['sign_document_validation']                               = 'Bitte unterschreiben Sie das Dokument.';
$lang['document_customer_signature_text']                       = 'Unterschrift (Kunde)';
$lang['accept_identity_confirmation_and_signature_sign']        = 'Digitale Signatur und Identitätsbestätigung beim Akzeptieren erforderlich';
$lang['legal_bound_text']                                       = 'Gesetzlich gebundener Text';
$lang['e_signature_sign']                                       = 'Unterschreiben';
$lang['is_signed']                                              = 'Unterschrieben';
$lang['is_not_signed']                                          = 'Nicht unterschrieben';
$lang['download']                                               = 'Herunterladen';
$lang['view_pdf_in_new_window']                                 = 'PDF in neuer Registerkarte anzeigen';
$lang['show_pdf_signature_contract']                            = 'PDF-Unterschrift auf Vertrag anzeigen';
$lang['document_signed_successfully']                           = 'Sie haben dieses Dokument erfolgreich unterschrieben.';
$lang['document_signed_info']                                   = 'Dieses Dokument ist mit %s auf %s von der IP-Adresse %s signiert.';
$lang['keep_signature']                                         = 'Kundensignatur beibehalten';
$lang['view_contract']                                          = 'Vertrag ansehen';
$lang['summary']                                                = 'Zusammenfassung';
$lang['discussion']                                             = 'Diskussion';
$lang['general_information']                                    = 'Allgemeine Informationen';
$lang['proposal_information']                                   = 'Informationen zum Angebot';
$lang['contract_comments']                                      = 'Kommentare';
$lang['not_contract_comment_from_client']                       = 'Neuer Kommentar des Kunden zum Vertrag %s …';
$lang['contract_files']                                         = 'Vertragsdateien';
$lang['date_signed']                                            = 'Datum der Unterzeichnung';
$lang['clear_signature']                                        = 'Unterschrift löschen';
$lang['recurring_has_ended']                                    = 'Diese Wiederholung von %s ist beendet.';
$lang['cycles_remaining']                                       = 'Verbleibende Zyklen';
$lang['cycles_infinity']                                        = 'Unendlich';
$lang['recurring_total_cycles']                                 = 'Gesamte Zyklen';
$lang['cycles_passed']                                          = 'Bestandene %s';
$lang['api_key_not_set_error_message']                          = 'API-Schlüssel nicht konfiguriert, klicken Sie auf den folgenden Link, um den API-Schlüssel zu konfigurieren: %s';
$lang['subscription']                                           = 'Abonnement';
$lang['subscription_lowercase']                                 = 'Abonnement';
$lang['subscriptions']                                          = 'Abonnements';
$lang['tax_is_used_in_subscriptions_warning']                   = 'Du kannst diese Steuer nicht aktualisieren, weil sie von Abonnements benutzt wird.';
$lang['credit_card']                                            = 'Kreditkarte';
$lang['update_credit_card']                                     = 'Kreditkarte aktualisieren';
$lang['credit_card_update_info']                                = 'Möchten Sie die Kreditkarte, die wir gespeichert haben, aktualisieren? Geben Sie hier die neuen Details an. Ihre Kartendaten werden niemals direkt unseren Server gespeichert.';
$lang['update_card_details']                                    = 'Kartendetails aktualisieren';
$lang['update_card_btn']                                        = 'Karte aktualisieren';
$lang['subscription_name']                                      = 'Name des Abonnements';
$lang['subscriptions_description']                              = 'Beschreibung';
$lang['subscribe']                                              = 'Abonnieren';
$lang['subscription_date']                                      = 'Datum';
$lang['first_billing_date']                                     = 'Erstes Abrechnungsdatum';
$lang['allow_primary_contact_to_update_credit_card']            = 'Erlaubt es dem Hauptkontakt, gespeicherte Kreditkarten-Token zu aktualisieren?';
$lang['show_subscriptions_in_customers_area']                   = 'Abonnements im Kundenbereich anzeigen?';
$lang['show_subscriptions_in_customers_area_help']              = 'Diese Option gilt nur für den Kunden-Primärkontakt.';
$lang['subscription_sent_to_email_success']                     = 'Abonnement erfolgreich per E-Mail versendet';
$lang['subscription_sent_to_email_fail']                        = 'Das Abonnement konnte nicht an eine E-Mail gesendet werden';
$lang['new_subscription']                                       = 'Neues Abonnement';
$lang['subscription_status']                                    = 'Status';
$lang['next_billing_cycle']                                     = 'Nächster Abrechnungszyklus';
$lang['subscription_not_subscribed']                            = 'Nicht abonniert';
$lang['send_subscription']                                      = 'Abonnement senden';
$lang['subscription_will_send_to_primary_contact']              = 'Das Abonnement wird an den Hauptkontakt gesendet.';
$lang['subscription_resumed']                                   = 'Abonnement wurde erfolgreich auf aktiv gesetzt';
$lang['subscription_canceled']                                  = 'Abonnement erfolgreich gekündigt';
$lang['no_credit_card_found']                                   = 'Keine Kreditkarte gefunden';
$lang['cancel_immediately']                                     = 'Sofort kündigen';
$lang['cancel_at_end_of_billing_period']                        = 'Am Ende der Abrechnungsperiode stornieren';
$lang['view_subscription']                                      = 'Abonnement anzeigen';
$lang['subscription_future']                                    = 'Zukunft';
$lang['subscription_active']                                    = 'Aktiv';
$lang['subscription_past_due']                                  = 'Überfällig';
$lang['subscription_canceled']                                  = 'Storniert';
$lang['subscription_unpaid']                                    = 'Unbezahlt';
$lang['billing_plan']                                           = 'Abrechnungsplan';
$lang['upcoming_invoice']                                       = 'Kommende Rechnung';
$lang['resume_now']                                             = 'Jetzt fortsetzen';
$lang['subscription_not_yet_subscribed']                        = 'Der Kunde ist noch nicht in diesem Abonnement angemeldet.';
$lang['subscription_is_canceled_no_resume']                     = 'Dieses Abonnement wurde gekündigt und kann nicht wieder aufgenommen werden.';
$lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'Dieses Abonnement wird am Ende des Abrechnungszeitraums gekündigt.';
$lang['customer_successfully_subscribed_to_subscription']       = 'Danke, dass Sie %s abonniert haben.';
$lang['date_subscribed']                                        = 'Datum der Anmeldung';
$lang['reports']                                                = 'Berichte';
$lang['subscriptions_summary']                                  = 'Zusammenfassung der Abonnements';
$lang['calendar_only_assigned_tasks']                           = 'Nur dem angemeldeten Mitarbeiter zugeordnete Aufgaben anzeigen';
$lang['invoice_activity_subscription_payment_succeeded']        = 'Abonnementzahlung erfolgreich, E-Mail gesendet an: %s';
$lang['mail_engine']                                            = 'Mail Engine';
$lang['settings_require_client_logged_in_to_view_contract']     = 'Kunde muss eingeloggt sein, um den Vertrag einsehen zu können.';
$lang['privacy_policy']                                         = 'Datenschutzerklärung';
$lang['gdpr_terms_agree']                                       = 'Ich stimme den <a href="%s" target="_blank">Geschäftsbedingungen</a> zu.';
$lang['terms_and_conditions_validation']                        = 'Die AGBs müssen akzeptiert werden, um fortfahren zu können.';
$lang['gdpr']                                                   = 'Datenschutz-Grundverordnung (DSGVO)';
$lang['data_removal_request_sent']                              = 'Datenentfernungsantrag erfolgreich versendet';
$lang['gdpr_consents']                                          = 'Einwilligungen';
$lang['gdpr_consent']                                           = 'Einwilligung';
$lang['gdpr_consent_purpose']                                   = 'Zweck';
$lang['gdpr_consent_opt_in']                                    = 'Anmelden';
$lang['gdpr_consent_opt_out']                                   = 'Abmelden';
$lang['gdpr_consent_agree']                                     = 'Ich stimme zu';
$lang['gdpr_consent_disagree']                                  = 'Ich stimme nicht zu';
$lang['view_consent']                                           = 'Einwilligung anzeigen';
$lang['transfer_consent']                                       = 'Zustimmung zur Übertragung';
$lang['view_public_form']                                       = 'Öffentliches Formular';
$lang['update_consent']                                         = 'Einwilligung aktualisieren';
$lang['consent_last_updated']                                   = 'Zuletzt aktualisiert: %s';
$lang['showing_search_result']                                  = 'Suchergebnisse anzeigen für: %s';
$lang['per_page']                                               = 'Pro Seite';
$lang['allow_staff_view_invoices_assigned']                     = 'Mitarbeitern erlauben, Rechnungen einzusehen, denen sie zugeordnet sind.';
$lang['allow_staff_view_estimates_assigned']                    = 'Mitarbeitern erlauben, Angebote einzusehen, denen sie zugeordnet sind.';
$lang['gdpr_right_to_be_informed']                              = 'Recht auf Information';
$lang['gdpr_right_of_access']                                   = 'Recht auf Zugang';
$lang['gdpr_right_to_data_portability']                         = 'Recht auf Datenübertragbarkeit';
$lang['gdpr_right_to_erasure']                                  = 'Recht auf Löschung';
$lang['edit_my_information']                                    = 'Meine Informationen bearbeiten';
$lang['export_my_data']                                         = 'Meine Daten exportieren';
$lang['request_data_removal']                                   = 'Datenentfernung anfordern';
$lang['explanation_for_data_removal']                           = 'Erklärung zur Datenentfernung';
$lang['briefly_describe_why_remove_data']                       = 'Beschreiben Sie kurz, warum Sie die Daten entfernen möchten.';
$lang['date_published']                                         = 'Datum der Veröffentlichung';
$lang['view']                                                   = 'Anzeigen';
$lang['customer_is_subscribed_to_subscription_info']            = 'Der Kunde ist für dieses Abonnement angemeldet.';
$lang['save_last_order_for_tables']                             = 'Letzte Reihenfolge für Tabellen speichern';
$lang['date_created']                                           = 'Erstellungsdatum';

# Version 2.0.1
$lang['company_logo_dark']                                      = 'Dunkles Firmenlogo';
$lang['customers_register_require_confirmation']                = 'Registrierungsbestätigung des Administrators nach der Kundenregistrierung erforderlich';
$lang['customer_requires_registration_confirmation']            = 'Benötigt Registrierungsbestätigung';
$lang['confirm_registration']                                   = 'Registrierungsbestätigung';
$lang['customer_registration_successfully_confirmed']           = 'Kundenregistrierung erfolgreich bestätigt';
$lang['customer_register_account_confirmation_approval_notice'] = 'Vielen Dank für Ihre Anmeldung, Ihr Konto wird noch geprüft und wird in Kürze bestätigt.';
$lang['after_subscription_payment_succeeded']                   = 'Nach erfolgter Bezahlung des Abonnements';
$lang['subscription_option_send_invoice']                       = 'Rechnung senden';
$lang['subscription_option_send_payment_receipt']               = 'Zahlungseingang senden';
$lang['subscription_option_send_payment_receipt_and_invoice']   = 'Rechnung und Zahlungseingang senden';
$lang['subscription_option_do_nothing']                         = 'Nichts tun';
$lang['gdpr_not_enabled']                                       = 'DSGVO ist nicht aktiviert';
$lang['enable_gdpr']                                            = 'DSGVO einschalten';
$lang['gdpr_right_to_rectification']                            = 'Recht auf Nachbesserung';
$lang['test_sms_config']                                        = 'Test SMS Konfiguration';
$lang['test_sms_message']                                       = 'Testnachricht';
$lang['send_test_sms']                                          = 'Sende Test-SMS';
$lang['gdpr_short']                                             = 'DSGVO';
$lang['allow_non_admin_staff_to_delete_ticket_attachments']     = 'Erlaube Mitarbeiter ohne Adminrechte Ticket-Anhänge zu löschen.';

# Version 2.1.0
$lang['contract_number']                                = 'Vertragsnummer';
$lang['project_changing_status_recurring_tasks_notice'] = 'Wenn der Status auf {0} geändert wird, werden alle wiederkehrenden Aufgaben abgebrochen.';
$lang['not_contract_signed']                            = 'Vertrag mit Betreff %s wurde vom Kunden unterschrieben';
$lang['the_number_sign']                                = '#';
$lang['not_new_ticket_reply']                           = 'Kunde hat auf ein Ticket geantwortet - %s';
$lang['receive_notification_on_new_ticket_replies']     = 'Benachrichtigung erhalten, wenn der Kunde auf ein Ticket antwortet';
$lang['receive_notification_on_new_ticket_reply_help']  = 'Alle Mitarbeiter der Ticketabteilung erhalten eine Benachrichtigung, wenn der Kunde auf ein Ticket antwortet.';
$lang['payment_gateway_enable_paypal']                  = 'PayPal-Zahlungen aktivieren';
$lang['project_member']                                 = 'Projektmitglied';
$lang['contract_notes']                                 = 'Notizen';
$lang['contract_add_note']                              = 'Notiz hinzufügen';

# Version 2.1.1
$lang['frequency']              = 'Häufigkeit';
$lang['frequency_every']        = 'Jede/n %s';
$lang['last_invoice_date']      = 'Letztes Rechnungsdatum';
$lang['next_invoice_date_list'] = 'Nächstes Rechnungsdatum';
$lang['enter_new_card']         = 'Neue Kreditkarte eingeben';

# Version 2.2.0
$lang['save_and_record_payment']                                     = 'Speichern und Aufzeichnen von Zahlungen';
$lang['choose_from_google_drive']                                    = 'Von Google Drive auswählen';
$lang['open_in_google']                                              = 'Mit Google Drive öffnen';
$lang['google_picker']                                               = 'Google Drive Picker';
$lang['enable_google_picker']                                        = 'Google Drive Picker aktivieren';
$lang['google_api_client_id']                                        = 'Google API Client ID';
$lang['subtract_tax_total_from_amount']                              = 'Die Steuergesamtsumme (%s) vom Betrag abziehen.';
$lang['expense_subtract_info_text']                                  = 'Diese Option kann verwendet werden, um den Gesamtsteuerbetrag vom Ausgabebetrag abzuziehen, was nützlich ist, wenn der Ausgabebetrag inklusive Steuern eingegeben wurde.';
$lang['company_exists_info']                                         = 'Es sieht so aus, als ob ein Kunde mit dem Namen %s bereits existiert, wenn der Kunde dennoch angelegt werden soll, kann diese Meldung ignoriert werden.';
$lang['import_items']                                                = 'Artikel importieren';
$lang['total_items_deleted']                                         = 'Insgesamt gelöschte Elemente: %s';
$lang['billable_amount']                                             = 'Abrechenbarer Betrag';
$lang['last_child_invoice_date']                                     = 'Datum der letzten untergeordneten Rechnung';
$lang['good_morning']                                                = 'Guten Morgen';
$lang['good_afternoon']                                              = 'Guten Tag';
$lang['good_evening']                                                = 'Guten Abend';
$lang['description_in_invoice_item']                                 = 'Beschreibung in die Rechnungsposition aufnehmen';
$lang['description_in_invoice_item_help']                            = 'Nützlich, wenn zusätzliche Informationen auf der Abonnementrechnung angegeben werden sollen, z.B. was dieses Abonnement beinhaltet.';
$lang['ticket_reminders']                                            = 'Erinnerungen';
$lang['ticket_set_reminder_title']                                   = 'Ticket-Erinnerung einstellen';
$lang['calendar_ticket_reminder']                                    = 'Ticket-Erinnerungen';
$lang['email_verification_required']                                 = 'E-Mail-Verifizierung erforderlich';
$lang['email_verification_required_message']                         = 'Um auf alle verfügbaren Funktionen des Portals zugreifen zu können, muss zuerst die E-Mail-Adresse bestätigt werden.';
$lang['email_verification_required_message_mail']                    = 'Wir haben Ihnen eine E-Mail mit Verifizierungsanweisungen geschickt, wenn Sie die E-Mail nicht erhalten haben, überprüfen Sie bitte den Spam-Ordner oder klicken Sie auf <a href="%s">hier</a>, um die Bestätigungsmail erneut zu versenden.';
$lang['email_already_verified']                                      = 'Diese E-Mail ist bereits verifiziert.';
$lang['invalid_verification_key']                                    = 'Ungültiger Verifizierungsschlüssel';
$lang['verification_key_expired']                                    = 'Verifizierungsschlüssel abgelaufen';
$lang['email_successfully_verified']                                 = 'Die E-Mail wurde erfolgreich verifiziert.';
$lang['email_successfully_verified_but_required_admin_confirmation'] = 'Die E-Mail wurde erfolgreich verifiziert, Sie können sich anmelden, sobald der Administrator Ihr Konto manuell bestätigt hat.';
$lang['email_verification_mail_sent_successully']                    = 'Wir haben Ihnen eine E-Mail mit Verifizierungsanweisungen geschickt.';
$lang['create_reminder']                                             = 'Erinnerung erstellen';
$lang['no_reminders_for_this_task']                                  = 'Keine Erinnerungen für diese Aufgabe';
$lang['reminder_for']                                                = 'Erinnerung für %s an %s';
$lang['no_description_provided']                                     = 'Keine Beschreibung vorhanden';
$lang['pay_with_card']                                               = 'Mit Kreditkarte bezahlen';
$lang['not_customer_uploaded_file']                                  = 'Neue Datei(en) im Profil hochgeladen';

# Version 2.2.1
$lang['customer_files_info_message'] = 'Dateien aus Projekten und Aufgaben, die mit dem Kunden verknüpft sind, werden in dieser Tabelle nicht angezeigt.';
$lang['ticket_import_reply_only']    = 'Versuche, nur die tatsächliche Ticketantwort zu importieren (ohne quoted/forwarded message).';
$lang['learn_more']                  = 'Mehr erfahren';
$lang['sales_item']                  = 'Artikel';

# Version 2.3.0

$lang['modules']                                 = 'Module';
$lang['module']                                  = 'Modul';
$lang['module_description']                      = 'Beschreibung';
$lang['module_activate']                         = 'Aktivieren';
$lang['module_deactivate']                       = 'Deaktivieren';
$lang['module_uninstall']                        = 'Deinstallieren';
$lang['module_upgrade_database']                 = 'Datenbank aktualisieren';
$lang['module_settings']                         = 'Einstellungen';
$lang['module_version']                          = 'Version %s';
$lang['module_by']                               = 'Von %s';
$lang['staff_which_are_using_role']              = 'Mitarbeiter, die diese Rolle nutzen';
$lang['copy']                                    = 'Kopieren';
$lang['read_more']                               = 'Mehr erfahren';
$lang['show_less']                               = 'Weniger anzeigen';
$lang['project_progress_text']                   = 'Projektfortschritt';
$lang['timer_not_stopped_yet']                   = 'Dieser Timer ist noch nicht gestoppt.';
$lang['refunds']                                 = 'Rückerstattungen';
$lang['refund']                                  = 'Rückerstattung';
$lang['refund_amount']                           = 'Rückerstattungsbetrag';
$lang['not_refunds_found']                       = 'Keine Rückerstattungen gefunden';
$lang['refunds_applied_cant_delete_credit_note'] = 'Dieser Gutschrift besteht zum Teil aus Rückerstattungen. Um die Gutschrift zu löschen, muss zuerst die Rückerstattung gelöscht werden.';

# Version 2.3.2
$lang['create_recurring_from_child_error_message'] = 'Diese %s kann nicht als wiederkehrend gesetzt werden, da diese %s ein Kind von einer anderen wiederkehrenden %s ist.';
$lang['statement_credit_note_refund']              = 'Gutschriftsrückerstattung - %s';
$lang['no_validation']                             = 'Keine Validierung';
$lang['lead_unique_validation_on']                 = 'Die Validierung für doppelten Lead auf den folgenden Feldern durchführen:';
$lang['phonenumber_exists']                        = 'Telefonnummer ist bereits vorhanden';
$lang['company_exists']                            = 'Firma  ist bereits vorhanden';
$lang['website_exists']                            = 'Webseite ist bereits vorhanden';
$lang['send_payment_receipt_to_client']            = 'Den Zahlungsbeleg an den Kunden senden';
$lang['payment_sent_successfully']                 = 'Der Zahlungsbeleg wurde erfolgreich versendet.';
$lang['payment_sent_failed']                       = 'Der Zahlungsbeleg konnte nicht gesendet werden.';

# Version 2.3.5
$lang['tags_update_replace_warning'] = 'Einige Tags werden nicht aktualisiert, weil der Name des Tags bereits existiert';
$lang['attach_statement']            = 'Kundenerklärung anfügen';

# Version 2.4.0
$lang['delete_credit_card']                        = 'Karte löschen';
$lang['delete_credit_card_info']                   = 'Die Kreditkarte kann nicht gelöscht werden, da aktive Abonnements vorhanden sind.';
$lang['credit_card_successfully_deleted']          = 'Kreditkarte wurde erfolgreich gelöscht.';
$lang['subscription_incomplete']                   = 'Unvollständig';
$lang['subscription_incomplete_expired']           = 'Unvollständig abgelaufen';
$lang['credit_card_short']                         = 'Karte';
$lang['webhook_created']                           = 'Webhook wurde erfolgreich erstellt.';
$lang['subscriptions_terms_info']                  = 'Hier können die Geschäftsbedingungen eingegeben werden, die dem Kunden vor der Anmeldung zum Abonnement angezeigt werden sollen.';
$lang['subscription_complete_payment']             = 'Zahlung abschließen';
$lang['subscription_is_subscription_is_expired']   = 'Dieses Abonnement ist abgelaufen.';
$lang['subscription_plan_currency_does_not_match'] = 'Ausgewählte Planwährung stimmt nicht mit der unten ausgewählten Währung überein.';
$lang['subscription_first_billing_date_info']      = 'Leer lassen, um das Datum zu verwenden, an dem der Kunde das Abonnement abonniert hat. Dieses Feld muss ein zukünftiges Datum sein. Wenn das gewählte Datum überschritten ist, der Kunde aber noch nicht abonniert hat, wird das Datum verwendet, an dem der Kunde abonnieren wird.';
$lang['stripe_subscription_select_plan']           = 'Stripe Plan auswählen';

# Version 2.4.1
$lang['contract_content_permission_edit_warning'] = 'Deine aktuellen Berechtigungen erlauben es dir nicht, den Vertragsinhalt zu bearbeiten. Wende dich an einen Administrator, um die Berechtigung zum Bearbeiten von Verträgen zu erhalten.';
$lang['mark_as_signed']                           = 'Als unterschrieben markieren';
$lang['unmark_as_signed']                         = 'Als nicht-unterschrieben markieren';
$lang['marked_as_signed']                         = 'Als unterschrieben markiert';
$lang['contract_marked_as_signed_info']           = 'Dieser Vertrag wird manuell als unterschrieben markiert.';
$lang['save_and_send_later']                      = 'Speichern und später senden';
$lang['schedule']                                 = 'Plan';
$lang['schedule_email_for']                       = 'E-Mail planen für %s';
$lang['schedule_date']                            = 'Wann soll die E-Mail gesendet werden?';
$lang['email_scheduled_successfully']             = 'E-Mail erfolgreich geplant';
$lang['invoice_will_be_sent_at']                  = 'Die Rechnung wird versandt am %s';

# Version 2.5.0
$lang['recaptcha_ignore_ips']            = 'Ignorierte IP-Adressen';
$lang['recaptcha_ignore_ips_info']       = 'Kommagetrennte IP-Adressen eingeben, die die reCaptcha Validierung überspringen soll.';
$lang['show_task_reminders_on_calendar'] = 'Aufgaben-Erinnerungen';
$lang['contracts_about_to_expire']       = 'Bald auslaufende Verträge';
$lang['no_contracts_about_to_expire']    = 'Es gibt keine Verträge, die in den nächsten %s-Tagen auslaufen.';
$lang['lead_value']                      = 'Intressenten Wert';
$lang['lead_value_tooltip']              = 'Die Basiswährung wird verwendet.';
$lang['leads_dt_lead_value']             = 'Intressenten Wert';
$lang['leads_canban_lead_value']         = 'Intressenten Wert: %s';
$lang['lead_add_edit_lead_value']        = 'Intressenten Wert';

# Version 2.6.0
$lang['gantt_view_day']   = 'Tagesansicht';
$lang['gantt_view_week']  = 'Wochenansicht';
$lang['gantt_view_month'] = 'Monatsansicht';
$lang['gantt_view_year']  = 'Jahresansicht';

# Version 2.7.0
$lang['hour_of_day_perform_tasks_reminder_notification_help'] = '24-Stunden-Format: 9 für 9 Uhr morgens oder 15 für 15 Uhr abends. Wird für wiederkehrende Aufgaben, Aufgabenerinnerungen usw. verwendet.';
$lang['clients_nav_contacts']                                 = 'Kontakte';
$lang['clients_my_contacts']                                  = 'Kontakte';
$lang['clients_my_contact']                                   = 'Kontakt';
$lang['new_contact']                                          = 'Neuer Kontakt';
$lang['customer_contact']                                     = 'Meine Kontakte';
$lang['clients_contact_added']                                = 'Kontakt wurde erfolgreich hinzugefügt';
$lang['clients_contact_updated']                              = 'Kontakt wurde erfolgreich aktualisiert';
$lang['allow_primary_contact_to_manage_other_contacts']       = 'Dem Hauptkontakt erlauben, andere Kundenkontakte zu verwalten';
$lang['contact_form_validation_is_unique']                    = 'Kontakt mit diesem {field} besteht bereits in unserem System';
$lang['invoice_number_not_applied_on_draft']                  = 'Wenn die Rechnung als Entwurf gespeichert wird, wird die Nummer nicht übernommen. Stattdessen wird die nächste Rechnungsnummer angegeben, wenn die Rechnung an den Kunden gesendet wird oder die Rechnung als gesendet markiert wird.';
$lang['two_factor_authentication_disabed']                    = 'Deaktivert';
$lang['enable_google_two_factor_authentication']              = 'Google-Authenticator aktivieren';
$lang['set_google_two_factor_authentication_failed']          = 'Speichern der Authentifizierung fehlgeschlagen, bitte versuchen Sie es erneut';
$lang['enter_two_factor_auth_code_from_mobile']               = 'Authentifizierungscode aus der Authentifizierungsanwendung eingeben';
$lang['staff_two_factor_authentication']                      = 'Zwei-Faktor-Authentifizierung';
$lang['google_authentication_code']                           = 'Code aus Authentifizierungsanwendung eingeben';
$lang['set_two_factor_authentication_successful']             = 'Zwei-Faktor-Authentifizierungseinstellungen wurden erfolgreich aktualisiert';
$lang['set_two_factor_authentication_failed']                 = 'Zwei-Faktor-Authentifizierungseinstellungen konnte nicht aktualisieren werden';
$lang['google_2fa_code_valid']                                = 'Erfolgreiche Überprüfung der Authentifizierung';
$lang['google_2fa_code_invalid']                              = 'Ungültiger Authentifizierungscode eingegeben, versuchen Sie es erneut.';
$lang['google_2fa_scan_qr_guide']                             = 'Scannen Sie den unten stehenden QR mit der Google Authenticator-Anwendung auf Ihrem Mobilgerät und füllen Sie anschließend das unten stehende Feld mit dem in der Anwendung generierten Code aus';
$lang['google_2fa_manul_input_secret']                        = 'Geheimschlüssel für manuelle Eingabe';

# Version 2.7.1
$lang['templates']                                   = 'Templates';
$lang['add_template']                                = 'Add Template';
$lang['edit_template']                               = 'Edit Template';
$lang['template_added']                              = 'Template added successfully';
$lang['template_updated']                            = 'Template updated successfully';
$lang['template_name']                               = 'Template Title';
$lang['template_content']                            = 'Template Content';
$lang['insert_template']                             = 'Insert';
$lang['items_table_amounts_exclude_currency_symbol'] = 'Exclude currency symbol from items table Amount';

$lang['multiplies_of']               = 'Multiplies of';
$lang['round_off_task_timer_option'] = 'Round off task timer';
$lang['task_timer_dont_round_off']   = 'Don\'t round off';
$lang['task_timer_round_up']         = 'Round up';
$lang['task_timer_round_down']       = 'Round down';
$lang['task_timer_round_nearest']    = 'Round to nearest';
$lang['calendar_task_reminder']      = 'Task Reminder';
$lang['projects_chart']              = 'Projects Chart';
$lang['overdue_by_days']             = 'OVERDUE BY %s DAYS';

$lang['two_checkout_payment_processing'] = 'Payment is been processed,you will be notified if successful';
$lang['two_checkout_payment_cancelled']  = 'Payment Cancelled';
$lang['two_checkout_merchant_code']      = 'Merchant Code';
$lang['two_checkout_secret_Key']         = 'Secret Code';
$lang['two_gateway_webhook_notice']      = 'The IPN Endpoint for 2Checkout is ( %s )';
$lang['something_went_wrong']            = 'Something went wrong. Try again';
$lang['imap_folder']                     = 'Folder';
$lang['retrieve_folders']                = 'Retrieve Folders';
$lang['email_to_ticket_config']          = 'Email to ticket configuration';

# Version 2.8.0
$lang['enable_support_menu_badges']              = 'Enable support menu item badge';
$lang['item_copy_success']                       = 'Item copied successfully';
$lang['item_copy_fail']                          = 'Failed to copy item';
$lang['attach_invoice_to_payment_receipt_email'] = 'Attach invoice PDF when sending payment receipt to email';

$lang['estimate_request']                                  = 'Estimate request';
$lang['estimate_requests']                                 = 'Estimate request';
$lang['estimate_request_form']                             = 'Estimate request form';
$lang['acs_estimate_request']                              = 'Estimate request';
$lang['acs_estimate_request_forms']                        = 'Forms';
$lang['estimate_request_forms']                            = 'Estimate Request Forms';
$lang['estimate_request_notify_staff']                     = 'Staff Members to Notify';
$lang['estimate_request_notify_when_submitted']            = 'Notify when estimate request submitted';
$lang['estimate_request_assignee']                         = 'Responsible (Assignee)';
$lang['estimate_request_notify_roles']                     = 'Roles to Notify';
$lang['custom_field_estimate_request']                     = 'Estimate request';
$lang['new_estimate_request_submitted_from_form']          = 'New Estimate Request submitted from Form - %s';
$lang['acs_estimate_request_statuses_submenu']             = 'Statuses';
$lang['estimate_request_dt_email']                         = 'Email';
$lang['estimate_request_dt_assigned']                      = 'Assigned';
$lang['estimate_request_dt_status']                        = 'Status';
$lang['estimate_request_dt_datecreated']                   = 'Created';
$lang['estimate_request_attachments']                      = 'Attachments';
$lang['estimate_request_new_status']                       = 'New Status';
$lang['estimate_request_status_table_name']                = 'Status Name';
$lang['estimate_request_table_total']                      = 'Total Request: %s';
$lang['estimate_request_statuses_not_found']               = 'No Estimate Request statuses found';
$lang['estimate_request_status_add_edit_name']             = 'Status Name';
$lang['estimate_request_status_color']                     = 'Color';
$lang['estimate_request_status_add_edit_order']            = 'Status Order';
$lang['estimate_request_status']                           = 'Status';
$lang['estimate_request_date_added']                       = 'Date Created';
$lang['estmate_request_tags_updated']                      = 'Tags Updated';
$lang['not_estimate_request_activity_status_updated']      = '%s updated estimate request status from %s to %s';
$lang['estimate_request_lowercase']                        = 'estimate request';
$lang['estimate_request_form_email_field_is_required']     = 'Email field is required to be added on the form';
$lang['estimate_request_form_email_field_set_to_required'] = 'Mark the email field as required';
$lang['not_delete_estimate_request_default_status']        = 'Cannot delete core estimate request status';
$lang['mark_estimate_request_as']                          = 'Mark as %s';
$lang['estimate_request_updated']                          = 'Estimate Request Updated';
$lang['convert_estimate_request']                          = 'Convert Estimate Request';
$lang['estimate_request_client_firstname']                 = 'First Name';
$lang['estimate_request_client_lastname']                  = 'Last Name';
$lang['estimate_request_email']                            = 'Email';
$lang['estimate_request_for_lead']                         = 'Lead';
$lang['estimate_request_for_customer']                     = 'Customer';
$lang['estimate_request_related']                          = 'Related to';
$lang['estimate_request_client_created_success']           = 'Estimate Request Customer Created';
$lang['estimate_request_assigned']                         = 'Staff Assigned';
$lang['not_estimate_request_activity_assigned_updated']    = 'Estimate Request Assigned to %s';
$lang['estimate_request_status_lowercase']                 = 'estimate request status';
$lang['estimate_request_assigned_to_staff']                = 'Estimate Request has been assigned to you';

$lang['activity_due_reminder_is_sent']   = '%s sent invoice becoming due reminder';
$lang['invoice_due_notice_before']       = 'Send due reminder X days before due date';
$lang['overdue_notices']                 = 'Overdue Notices';
$lang['invoice_overdue_notices_info']    = 'Overdue notices are sent when the invoice becomes overdue.';
$lang['due_reminders']                   = 'Due Reminders';
$lang['due_reminders_for_invoices_info'] = 'Due reminders are sent to unpaid and partially paid invoices as reminder to the customer to pay the invoice before is due.';
$lang['expenses_list_made_payment_by']   = 'Made Payment by %s';

# Version 2.8.2
$lang['hide_task_checklist_items_completed'] = 'Hide completed items';
$lang['show_task_checklist_items_completed'] = 'Show completed items %s';
$lang['task_checklist_assign']               = 'Assign staff';
$lang['task_checklist_assigned']             = 'Assigned to %s';

# Version 2.8.3
$lang['projects_send_contact_notification']                   = 'Send contacts notifications';
$lang['project_send_all_contacts_with_notifications_enabled'] = 'To all contacts with notifications for projects enabled';
$lang['project_do_not_send_contacts_notifications']           = 'Do not send notifications';
$lang['project_send_specific_contacts_with_notification']     = 'Specific contacts';
$lang['project_contacts_to_notify']                           = 'Select contacts to notify';
$lang['contract_signed_by']                                   = 'Signer Name';
$lang['contract_signed_date']                                 = 'Signed Date';
$lang['contract_signed_ip']                                   = 'IP Address';
$lang['show_estimate_request_in_customers_area']              = 'Show Estimate request link in customers area?';
$lang['customers_estimate_request_link_text']                 = 'Request Estimate';
$lang['total_expenses_deleted']                               = 'Total Expenses Deleted: %s';
$lang['estimate_convert_to_project']                          = 'Convert to Project';
$lang['estimate_items_convert_to_tasks']                      = 'Items that will be converted to tasks';

# Version 2.9.0
$lang['home_payment_records']                                  = 'Payment Records';
$lang['weekly']                                                = 'Weekly';
$lang['monthly']                                               = 'Monthly';
$lang['failed_to_update_timesheet']                            = 'Timesheet was not updated';
$lang['permission_create_timesheets']                          = 'Create Timesheets';
$lang['permission_edit_timesheets']                            = 'Edit Timesheets (Global)';
$lang['permission_edit_own_timesheets']                        = 'Edit Own Timesheets';
$lang['permission_delete_timesheets']                          = 'Delete Timesheets (Global)';
$lang['permission_delete_own_timesheets']                      = 'Delete own Timesheets';
$lang['permission_edit_milestones']                            = 'Edit Milestones';
$lang['permission_delete_milestones']                          = 'Delete Milestones';
$lang['add_timesheet']                                         = 'Add timesheet';
$lang['submit_button_bg_color']                                = 'Submit button background color';
$lang['submit_button_text_color']                              = 'Submit button background text';
$lang['automatically_assign_ticket_to_first_staff_responding'] = 'Automatically assign the ticket to the first staff that post a reply?';

# Version 2.9.1
$lang['contract_signed_not_all_fields_editable'] = 'This contract is signed, hence not all fields can be edited until the signature is removed.';
$lang['form_submit_success_action']              = 'What should happen after a visitor submits this form';
$lang['form_submit_success_display_thank_you']   = 'Display thank you messsage';
$lang['form_submit_success_redirect_to_website'] = 'Redirect to another website';
$lang['form_submit_website_url']                 = 'Website URL';

# Version 2.9.2
$lang['open_google_map']                                  = 'Open in Google Map';
$lang['milestone_start_date']                             = 'Start Date';
$lang['send_reminder_for_completed_but_not_billed_tasks'] = 'Send an email reminder of billable tasks completed but not billed';
$lang['staff_to_notify_completed_but_not_billed_tasks']   = 'Select which staff members you want to receive the reminder';
$lang['reminder_for_completed_but_not_billed_tasks_days'] = 'Select days of the week reminder should be sent';
$lang['notifications']                                    = 'Notifications';
$lang['merged']                                           = 'Merged';
$lang['ticket_merged_notice']                             = 'This ticket is merged into the ticket with ID';
$lang['view_primary_ticket']                              = 'View primary ticket';
$lang['merge_tickets']                                    = 'Merge Tickets';
$lang['primary_ticket']                                   = 'Primary Ticket';
$lang['primary_ticket_status']                            = 'Primary Ticket Status';
$lang['tickets_merged']                                   = 'Tickets Merged Successfully';
$lang['cannot_merge_into_merged_ticket']                  = 'Ticket that is merged into another ticket cannot be used as primary ticket';
$lang['merge_ticket_ids_field_label']                     = 'Merge Ticket #';
$lang['merge_ticket_ids_field_placeholder']               = 'example: 5 or 5,6';
$lang['cannot_merge_tickets_with_ids']                    = 'Ticket %s is already merged in another ticket';
$lang['ticket_merged_tickets_header']                     = 'This ticket contains %s tickets that are merged';
$lang['batch_payments_table_invoice_number_heading']      = 'Invoice Number';
$lang['batch_payments_table_payment_date_heading']        = 'Payment Date';
$lang['batch_payments_table_payment_mode_heading']        = 'Payment Mode';
$lang['batch_payments_table_transaction_id_heading']      = 'Transaction Id';
$lang['batch_payments_table_amount_received_heading']     = 'Amount received';
$lang['batch_payments_table_invoice_balance_due']         = 'Invoice Balance Due';
$lang['add_batch_payments']                               = 'Add Payments';
$lang['batch_payment_filter_by_customer']                 = 'Filter invoices by customer';
$lang['batch_payments']                                   = 'Batch Payments';
$lang['batch_payment_added_successfully']                 = 'You have successfully added %s payments';
$lang['batch_payments_send_invoice_payment_recorded']     = 'Do not send invoice payment recorded email to customer contacts';
$lang['invoice_batch_payments']                           = 'Batch Payment';
$lang['staff_is_currently_replying']                      = '%s is currently replying to ticket.';

# Version 2.9.4
$lang['permission_view_timesheet_report']                  = 'View Timesheets Report';
$lang['timesheets_overview_all_members_notice_permission'] = 'Timesheet overview for all staff members is only available for Staff with Permission to view timesheet reports and administrators.';
$lang['show_project_on_proposal']                          = 'Show Project Name On Proposal';
$lang['ticket_reports_staff']                              = 'Staff Member';
$lang['ticket_reports_total_assigned']                     = 'Total Assigned Tickets';
$lang['ticket_reports_open_tickets']                       = 'Open Tickets';
$lang['ticket_reports_closed_tickets']                     = 'Closed Tickets';
$lang['ticket_reports_replies_to_tickets']                 = 'Replies To Tickets';
$lang['ticket_reports_average_reply_time']                 = 'Average Reply Time';
$lang['home_tickets_report']                               = 'Staff Tickets Report';
$lang['ticket_reports_average_reply_time_help']            = 'Average response time from assigned tickets.';
$lang['created_by']                                        = 'Created by';

$lang['staff_related_ticket_notification_to_assignee_only']      = 'Send staff-related ticket notifications to the ticket assignee only';
$lang['staff_related_ticket_notification_to_assignee_only_help'] = 'If this option is set to Yes and the ticket does not have an assignee, notification will be sent to all staff that belongs to the ticket department';
$lang['import_expenses']                                         = 'Import Expenses';
$lang['show_pdf_signature_proposal']                             = 'Show PDF Signature on Proposal';
$lang['enable_honeypot_spam_validation']                         = 'Enable Honeypot spam validation';

# Version 3.0.0
$lang['contracts_view_marked_as_signed'] = 'Marked As Signed';
$lang['contracts_view_signed']           = 'signed';
$lang['contracts_view_not_expired']      = 'Not Expired';
$lang['contract_information']            = 'Contract Information';
$lang['receipt']                         = 'Receipt';
$lang['search_proposals']                = 'Search Proposals';
$lang['search_estimates']                = 'Search Estimates';
$lang['quick_create']                    = 'Quick Create';

# Version 3.0.5
$lang['subscription_last_sent']                             = 'Last Sent';
$lang['automatically_set_logged_in_staff_sales_agent']      = 'Automatically assign logged in staff as sale agent';
$lang['automatically_set_logged_in_staff_sales_agent_help'] = 'Applicable for: Estimates, invoices, proposal';
$lang['permission_view_all_templates']                      = 'View All Templates';
$lang['settings_contract_sign_reminder_every_days_info']    = 'Sign reminders are sent to the customer contacts after the contract is first time sent to the customer and they are automatically stopped when the contract is signed.';
$lang['contract_sign_reminder_every_days']                  = 'Send sign reminder every (days)';
$lang['contract_sign_reminders']                            = 'Sign Reminders';
$lang['payment_gateway_fee_percentage']                     = 'Percentage Fee';
$lang['payment_gateway_fee_fixed']                          = 'Fixed Fee';
$lang['payment_attempt_amount']                             = 'Invoice Total';
$lang['payment_attempt_fee']                                = 'Payment Fee';
$lang['feature']                                            = 'Feature';
$lang['capabilities']                                       = 'Capabilities';
