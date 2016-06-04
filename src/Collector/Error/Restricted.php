<?php

namespace Collector\Error;

/**
 * Class Restricted
 * @package Collector\Error
 */
abstract class Restricted extends Unrestricted
{
    const DENIED_TO_PURCHASE = 'When a customer is denied to do purchase, for example blocked for purchase based on different reasons, please contact Collector for more information.';
    const CREDIT_CHECK_DENIED = 'The credit check is not approved.';
    const ADDRESS_NOT_FOUND = 'Address can\'t be found for the specified customer.';
    const RESERVATION_NOT_APPROVED = 'Reservation is not approved.';
    const PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT = 'The total amount of an invoice or reservation can\'t be greater than your maximum credit limit or the maximum credit limit for the country the purchase is made in.';
    const INVALID_REGISTRATION_NUMBER = 'When the reg.no is not in a correct format.';
    const AGREEMENT_RULES_VALIDATION_FAILED = 'Something with the use of the API is against the agreement with Collector, please contact Collector for information.';
    const UNHANDLED_EXCEPTION = 'If an unhandled error occurs, an unhandled exception will be thrown. In cases of these errors contact Collector for help';
    const ACTIVATION_OF_INVOICE_DENIED = 'Activation of an invoice is denied.';
    const ARTICLE_NOT_FOUND = 'An Article can’t be found. Both Article Id and description specified must be the same that was used during AddInvoice. If more than one article with the same article id but different unit price is added to the invoice, the unit price of the article must be specified.';
    const ARTICLE_NOT_FOUND_BASED_ON_UNITPRICE = 'Can’t locate the specified article based on the specified unit price. Make sure an article with the specified unit price exists.';
    const AUTHORIZATION_FAILED = 'Could not authorize the request, check your login credentials. Please contact Collector for more help.';
    const COUNTRYCODE_MISMATCH_WITH_CUSTOMER_ADDRESS = 'The specified country code for the customer’s address doesn’t match the country code specified in the (base) request.';
    const COUNTRYCODE_MISMATCH_WITH_DELIVERY_ADDRESS = 'The specified country code for the customer’s delivery address doesn’t match the country code specified in the (base) request.';
    const COUNTRYCODE_MISMATCH_WITH_INVOICE_ADDRESS = 'The specified country code for the customer’s invoice address doesn’t match the country code specified in the (base) request.';
    const EMAIL_IS_MISSING = 'The delivery method was set to email but the Email field was not present in the request.';
    const INVALID_COUNTRYCODE = 'Can be thrown when you try to request an address from another country than the one you are registered in.';
    const INVALID_CREDIT_TIME_USAGE = 'Credit time can’t be used for the specific invoice type.';
    const INVALID_CURRENCY_CODE = 'The specified currency can’t be used. This exception can be thrown if you are registered in a country where the specified currency is not allowed to be used.';
    const INVALID_DELIVERY_ADDRESS_USAGE = 'Private customers aren’t allowed to have different invoice address and deliver address, they must be the same.';
    const INVALID_INVOICE_STATUS = 'When you try to cancel an pending invoice that can’t be canceled based on the stage it is in.';
    const INVALID_PRODUCT_CODE = 'The product code cannot be found or the product is inactive.';
    const INVALID_QUANTITY = 'The quantity of an article is too low or too high compared to the quantity or quantity left on the article.';
    const INVALID_TRANSACTION_AMOUNT = 'The amount may exceeds the total invoice amount, or the number of decimals has more than two digits after decimal (Can only have two digits after decimal).';
    const INVOICE_DUEDATE_ALREADY_EXTENDED = 'The due date of the invoice has already been extended.';
    const INVOICE_EXCEEDS_AVAILABLE_RESERVATION = 'The purchase sum of the invoice exceeds the available reservation amount.';
    const INVOICE_EXTENDED_DATE_IN_PAST = 'When you try to extend a due date by specifying a date in the past.';
    const INVOICE_INVALID_TYPE = 'When an invoice may be of wrong type, some actions aren’t allowed to perform on specific invoices, for example: You can’t extend the due date on an invoice that is not of type Direct invoice (delivered in the package).';
    const INVOICE_NOT_FOUND = 'When the specified Invoice number can’t be found. When trying to credit an invoice the invoice is already credited or not activated.';
    const INVOICE_TYPE_IS_NOT_ALLOWED_TO_BE_USED = 'You aren’t allowed to use the specified invoice type.';
    const MIXED_CURRENCY = 'The article’s currency doesn’t match the currency on the invoice.';
    const MOBILE_PHONE_IS_MISSING = 'The mobile phone is missing, which is needed because of the choosen notification type.';
    const NOT_ALLOWED_TO_SEND_NOTIFICATION_BY_EMAIL = 'You aren’t allowed to send the specific invoice type by e-mail.';
    const NOT_ALLOWED_TO_SEND_NOTIFICATION_BY_MAIL = 'You aren’t allowed to send the specific invoice type by postal mail.';
    const PURCHASE_NOT_FOUND = 'An invoice can’t be found.';
    const RESERVATION_NOT_FOUND = 'There was no reservation for the specified customer.';
    const TOTAL_AMOUNT_MUST_BE_POSITIVE = 'The amount of an invoice must be positive.';
    const UNIQUE_ARTICLE_NOT_FOUND = 'When article with the same article id is found several times but have different unit prices. The unit price must be specified also to locate the specific article.';
    const VALIDATION_ACTIVATION_OPTION_VALUE = 'The ActivationOption field was not one of its allowed values.';
    const VALIDATION_ADDRESS1_LENGTH = 'The Address1 field was too long.';
    const VALIDATION_ADDRESS2_LENGTH = 'The Address2 field was too long.';
    const VALIDATION_AMOUNT_PARSING = 'The unit price or other kind of amount fields could not be parsed. Make sure the amount is a decimal value and the number of decimals doesn’t have more than two digits after decimal (Can only have two digits after decimal).';
    const VALIDATION_AMOUNT_RANGE = 'The Amount field was not within its allowed range.';
    const VALIDATION_AMOUNT_REQUIRED = 'The Amount field was not present in the request.';
    const VALIDATION_ARTICLE_ID_LENGTH = 'The ArticleId field was too long.';
    const VALIDATION_ARTICLE_ID_REQUIRED = 'An article is missing its ArticleId.';
    const VALIDATION_ARTICLE_LIST_REQUIRED = 'The ArticleList field was not present in the request.';
    const VALIDATION_CELL_PHONE_NUMBER_LENGTH = 'The CellPhoneNumber field was too long.';
    const VALIDATION_CITY_LENGTH = 'The City field was too long.';
    const VALIDATION_CITY_REQUIRED = 'The City field was not present in the request.';
    const VALIDATION_CLIENT_IP_ADDRESS_LENGTH = 'The ClientIpAddress field was too long.';
    const VALIDATION_CLIENT_IP_ADDRESS_REQUIRED = 'The ClientIpAddress field was not present in the request.';
    const VALIDATION_COADDRESS_LENGTH = 'The CoAddress field was too long.';
    const VALIDATION_COMPANY_NAME_LENGTH = 'The CompanyName field was too long.';
    const VALIDATION_COST_CENTER_LENGTH = 'The CostCenter field was too long.';
    const VALIDATION_COUNTRY_CODE_LENGTH = 'The CountryCode field was too long.';
    const VALIDATION_COUNTRY_CODE_REQUIRED = 'The CountryCode field was not present in the request.';
    const VALIDATION_CREDIT_DATE_REQUIRED = 'The CreditDate field was not present in the request.';
    const VALIDATION_CREDIT_TIME_OUT_OF_RANGE = 'Credit time is out of range, can only be between 0 and 99.';
    const VALIDATION_CURRENCY_LENGTH = 'The Currency field was too long.';
    const VALIDATION_CURRENCY_INVALID = 'The specified currency may not be supported or is of an incorrect format (ISO 4217). Currency need to be at least three characters long and follow ISO 4217, e.g. SEK, DKK, NOK and EUR etc.';
    const VALIDATION_CURRENCY_REQUIRED = 'The Curency field was not present in the request.';
    const VALIDATION_CUSTOMER_NUMBER_LENGTH = 'The CustomerNumber field was too long.';
    const VALIDATION_DELIVERY_ADDRESS_REQUIRED = 'The DeliveryAddress field was not present in the request.';
    const VALIDATION_DESCRIPTION_LENGTH = 'The Description field was too long.';
    const VALIDATION_EMAIL_INVALID = 'The e-mail address is not a valid e-mail address.';
    const VALIDATION_EMAIL_LENGTH = 'The Email field was too long. Can only be maximum of 256 characters.';
    const VALIDATION_ERROR = 'Input data is not correct.';
    const VALIDATION_FIRST_NAME_LENGTH = 'The FirstName field was too long.';
    const VALIDATION_GENDER_VALUE = 'The Gender field was not one of its allowed values.';
    const VALIDATION_INVOICE_ADDRESS_REQUIRED = 'The InvoiceAddress field was not present in the request.';
    const VALIDATION_INVOICE_DELIVERY_METHOD_VALUE = 'The InvoiceDeliveryMethod field was not one of its allowed values.';
    const VALIDATION_INVOICE_NUMBER_LENGTH = 'The InvoiceNo field was too long.';
    const VALIDATION_INVOICE_NUMBER_REQUIRED = 'The InvoiceNo field was not present in the request.';
    const VALIDATION_INVOICE_TYPE_VALUE = 'The InvoiceType field was not one of its allowed values.';
    const VALIDATION_LAST_NAME_LENGTH = 'The LastName field was too long.';
    const VALIDATION_ORDER_DATE_REQUIRED = 'The OrderDate field was not present in the request.';
    const VALIDATION_ORDER_NUMBER_LENGTH = 'The OrderNo field was too long.';
    const VALIDATION_PASSWORD_REQUIRED = 'The Password field was not present in the request.';
    const VALIDATION_PHONE_NUMBER_LENGTH = 'The PhoneNumber field was too long.';
    const VALIDATION_POSTAL_CODE_LENGTH = 'The PostalCode field was too long.';
    const VALIDATION_POSTAL_CODE_REQUIRED = 'The PostalCode field was not present in the request.';
    const VALIDATION_QUANTITY_RANGE = 'The Quantity field was not within its allowed range.';
    const VALIDATION_QUANTITY_REQUIRED = 'An article is missing its Quantity.';
    const VALIDATION_REFERENCE_LENGTH = 'The Reference field was too long.';
    const VALIDATION_REGISTRATION_NUMBER_LENGTH = 'The RegNo field was too long.';
    const VALIDATION_REGISTRATION_NUMBER_REQUIRED = 'The RegNo field was not present in the request.';
    const VALIDATION_RESERVED_AMOUNT_PARSING = 'The ReservedAmount field could not be parsed.';
    const VALIDATION_RESERVED_AMOUNT_RANGE = 'The ReservedAmount field was not within its allowed range.';
    const VALIDATION_RESERVED_AMOUNT_REQUIRED = 'The ReservedAmount field was not present in the request.';
    const VALIDATION_UNIT_PRICE_PARSING = 'The UnitPrice field could not be parsed.';
    const VALIDATION_UNIT_PRICE_RANGE = 'The UnitPrice field was not within its allowed range.';
    const VALIDATION_USERNAME_REQUIRED = 'The Username field was not present in the request.';
    const VALIDATION_VAT_PARSING = 'The Vat field could not be parsed.';
    const VALIDATION_VAT_RANGE = 'The Vat field was not within its allowed range.';
    const VALIDATION_VAT_REQUIRED = 'The Vat field was not present in the request.';
}
