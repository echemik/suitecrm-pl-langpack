<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
    'LBL_ASSIGNED_TO_NAME' => 'Menadżer kontraktów',
    'LBL_CONTRACT_ACCOUNT' => 'Konto',
    'LBL_OPPORTUNITY' => 'Okazja',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Wprowadzona Data',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_MODIFIED' => 'Zmodyfikowane Przez',
    'LBL_MODIFIED_ID' => 'ID Modyfikującego',
    'LBL_MODIFIED_NAME' => 'Imię Modyfikującego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_CREATED_ID' => 'ID Tworzącego',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Tytuł umowy',
    'LBL_CREATED_USER' => 'Utworzomy przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_FORM_TITLE' => 'Lista umów',
    'LBL_MODULE_NAME' => 'Kontrakty',
    'LBL_MODULE_TITLE' => 'Umowy: Pulpit',
    'LBL_HOMEPAGE_TITLE' => 'Moje umowy',
    'LNK_NEW_RECORD' => 'Utwórz kontakt',
    'LNK_LIST' => 'Lista kontaktów',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Importuj umowy',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj umów',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakty',
    'LBL_NEW_FORM_TITLE' => 'Nowa umowa',
    'LBL_CONTRACT_NAME' => 'Nazwa kontaktu',
    'LBL_REFERENCE_CODE ' => 'Kod referencyjny ',
    'LBL_START_DATE' => 'Data Rozpoczęcia',
    'LBL_END_DATE' => 'Data Zakończenia',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Wartość umowy',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data podpisania przez klienta',
    'LBL_COMPANY_SIGNED_DATE' => 'Data podpisania przez firmę',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data przypomnienia o odnowieniu umowy',
    'LBL_CONTRACT_TYPE' => 'Typ umowy',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Dodaj Grupę',
    'LBL_DELETE_GROUP' => 'Usuń Grupę',
    'LBL_GROUP_NAME' => 'Nazwa Grupy',
    'LBL_GROUP_TOTAL' => 'Razem Grupa',
    'LBL_PRODUCT_QUANITY' => 'Ilość',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Numer części',
    'LBL_PRODUCT_NOTE' => 'Notatki',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_TYPE' => 'Typ',
    'LBL_DISCOUNT_AMT' => 'Rabat',
    'LBL_UNIT_PRICE' => 'Cena Sprzedaży',
    'LBL_TOTAL_PRICE' => 'Razem',
    'LBL_VAT' => 'Podatek',
    'LBL_VAT_AMT' => 'Wartość Podatku',
    'LBL_SERVICE_NAME' => 'Usługi',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Cena Sprzedaży',
    'LBL_SERVICE_DISCOUNT' => 'Rabat',
    'LBL_LINE_ITEMS' => 'Pozycje',
    'LBL_SUBTOTAL_AMOUNT' => 'Razem (po rabacie)',
    'LBL_DISCOUNT_AMOUNT' => 'Rabat',
    'LBL_TAX_AMOUNT' => 'Podatek',
    'LBL_SHIPPING_AMOUNT' => 'Spedycja',
    'LBL_TOTAL_AMT' => 'Razem',
    'LBL_GRAND_TOTAL' => 'Suma',
    'LBL_SHIPPING_TAX' => 'Podatek od spedycji',
    'LBL_SHIPPING_TAX_AMT' => 'Podatek od spedycji',
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj linię produktów',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj linię usług ',
    'LBL_PRINT_AS_PDF' => 'Drukuj w Formacie PDF',
    'LBL_EMAIL_PDF' => 'Wyślij PDF',
    'LBL_PDF_NAME' => 'Umowa',
    'LBL_EMAIL_NAME' => 'Umowa dla',
    'LBL_NO_TEMPLATE' => 'BŁĄD\nNie znaleziono szablonu. Jeśli nie utworzyłeś szablonu umowy, przejdż do Szablonów PDF i stwórz go',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Wartość umowy (domyślna waluta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabat (domyślna waluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Podatek (domyślna waluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Spedycja (domyślna waluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Razem (domyślna waluta)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Podatek od spedycji (domyślna waluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Podatek od spedycji (domyślna waluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Suma brutto (domyślna waluta)',
);
?>
