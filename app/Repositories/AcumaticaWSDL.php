<?php

namespace App\Repositories;

use \SoapClient;

class ProcessResult {
  public $Status; // ProcessStatus
  public $Seconds; // int
  public $Message; // string
}

class ProcessStatus {
  const NotExists = 'NotExists';
  const InProcess = 'InProcess';
  const Completed = 'Completed';
  const Aborted = 'Aborted';
}

class GetScenario {
  public $scenario; // string
}

class GetScenarioResponse {
  public $GetScenarioResult; // ArrayOfCommand
}

class Command {
  public $FieldName; // string
  public $ObjectName; // string
  public $Value; // string
  public $Commit; // boolean
  public $IgnoreError; // boolean
  public $LinkedCommand; // Command
  public $Descriptor; // ElementDescriptor
  //Workaround for PHP BUG 50675
  function __clone(){
    foreach($this as $name => $value){
        if(gettype($value)=='object'){
            $this->$name= clone($this->$name);
        }
    }
  }
}

class ElementDescriptor {
  public $DisplayName; // string
  public $IsDisabled; // boolean
  public $IsRequired; // boolean
  public $ElementType; // ElementTypes
  public $LengthLimit; // int
  public $InputMask; // string
  public $DisplayRules; // string
  public $AllowedValues; // ArrayOfString
}

class ElementTypes {
  const String = 'String';
  const AsciiString = 'AsciiString';
  const StringSelector = 'StringSelector';
  const ExplicitSelector = 'ExplicitSelector';
  const Number = 'Number';
  const Option = 'Option';
  const WideOption = 'WideOption';
  const Calendar = 'Calendar';
  const Action = 'Action';
}

class SchemaMode {
  const Basic = 'Basic';
  const Detailed = 'Detailed';
}

class EveryValue extends Command {
}

class Key extends Command {
}

class Action extends Command {
}

class Field extends Command {
}

class Value extends Command {
  public $Message; // string
  public $IsError; // boolean
}

class Answer extends Command {
}

class RowNumber extends Command {
}

class NewRow extends Command {
}

class DeleteRow {
}

class Parameter extends Command {
}

class Attachment {
}

class Filter {
  public $Field; // Field
  public $Condition; // FilterCondition
  public $Value; // anyType
  public $Value2; // anyType
  public $OpenBrackets; // int
  public $CloseBrackets; // int
  public $Operator; // FilterOperator
}

class FilterCondition {
  const Equals = 'Equals';
  const NotEqual = 'NotEqual';
  const Greater = 'Greater';
  const GreaterOrEqual = 'GreaterOrEqual';
  const Less = 'Less';
  const LessOrEqual = 'LessOrEqual';
  const Contain = 'Contain';
  const StartsWith = 'StartsWith';
  const EndsWith = 'EndsWith';
  const NotContain = 'NotContain';
  const Between = 'Between';
  const IsNull = 'IsNull';
  const IsNotNull = 'IsNotNull';
}

class FilterOperator {
  const _And = 'And';
  const _Or = 'Or';
}

class Login {
  public $name; // string
  public $password; // string
}

class LoginResult {
  public $Code; // ErrorCode
  public $Message; // string
  public $Session; // string
}

class ErrorCode {
  const OK = 'OK';
  const INVALID_CREDENTIALS = 'INVALID_CREDENTIALS';
  const INTERNAL_ERROR = 'INTERNAL_ERROR';
  const INVALID_API_VERSION = 'INVALID_API_VERSION';
}

class LoginResponse {
  public $LoginResult; // LoginResult
}

class Logout {
}

class LogoutResponse {
}

class SetBusinessDate {
  public $date; // dateTime
}

class SetBusinessDateResponse {
}

class SetLocaleName {
  public $localeName; // string
}

class SetLocaleNameResponse {
}

class SetSchemaMode {
  public $mode; // SchemaMode
}

class SetSchemaModeResponse {
}

class AR302000Content {
  public $Actions; // AR302000Actions
  public $PaymentSummary; // AR302000PaymentSummary
  public $FinancialDetailsLinkToGL; // AR302000FinancialDetailsLinkToGL
  public $FinancialDetailsPaymentInformation; // AR302000FinancialDetailsPaymentInformation
  public $DocumentsToApply; // AR302000DocumentsToApply
  public $ApplicationHistory; // AR302000ApplicationHistory
  public $OrdersToApply; // AR302000OrdersToApply
  public $PaymentSummaryRateSelection; // AR302000PaymentSummaryRateSelection
  public $PaymentSummaryRateSelectionCurrencyUnitEquivalents; // AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalents
  public $CreditCardProcessingInfo; // AR302000CreditCardProcessingInfo
  public $FinanceCharges; // AR302000FinanceCharges
  public $RecordCCPaymentCCPaymentData; // AR302000RecordCCPaymentCCPaymentData
  public $CCPaymentWithExternalAuthorizationCCPaymentData; // AR302000CCPaymentWithExternalAuthorizationCCPaymentData
  public $LoadOptions; // AR302000LoadOptions
  public $FinancialDetailsVoucherDetails; // AR302000FinancialDetailsVoucherDetails
}

class AR302000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $Release; // Action
  public $VoidCheck; // Action
  public $ViewBatch; // Action
  public $CaptureCCPaymentAction; // Action
  public $AuthorizeCCPaymentAction; // Action
  public $VoidCCPaymentAction; // Action
  public $CreditCCPaymentAction; // Action
  public $RecordCCPaymentAction; // Action
  public $CaptureOnlyCCPaymentAction; // Action
  public $CustomerDocumentsInquiry; // Action
  public $AREditDetailedReport; // Action
  public $ARRegisterDetailedReport; // Action
  public $NewCustomer; // Action
  public $EditCustomer; // Action
  public $CustomerDocuments; // Action
  public $LoadInvoices; // Action
  public $LoadOrders; // Action
  public $ReverseApplication; // Action
  public $ViewDocumentToApply; // Action
  public $ViewApplicationDocument; // Action
  public $ViewSODocumentToApply; // Action
  public $ViewCurrentBatch; // Action
  public $CaptureCCPayment; // Action
  public $AuthorizeCCPayment; // Action
  public $VoidCCPayment; // Action
  public $CreditCCPayment; // Action
  public $RecordCCPayment; // Action
  public $CaptureOnlyCCPayment; // Action
  public $ShowImportGraphErrors; // Action
}

class AR302000PaymentSummary {
  public $DisplayName; // string
  public $Type; // Field
  public $ReferenceNbr; // Field
  public $Status; // Field
  public $Hold; // Field
  public $ApplicationDate; // Field
  public $ApplicationPeriod; // Field
  public $PaymentRef; // Field
  public $Customer; // Field
  public $Location; // Field
  public $PaymentMethod; // Field
  public $CardAccountNo; // Field
  public $CardAccountNoCardAccountNo; // Field
  public $CashAccount; // Field
  public $Currency; // Field
  public $CuryViewState; // Field
  public $DepositAfter; // Field
  public $Description; // Field
  public $ProcessingStatus; // Field
  public $PaymentAmount; // Field
  public $AppliedToDocuments; // Field
  public $AppliedToOrders; // Field
  public $AvailableBalance; // Field
  public $WriteOffAmount; // Field
  public $FinanceCharges; // Field
  public $DeductedCharges; // Field
  public $IsCCPayment; // Field
  public $OrigPCRefNbr; // Field
  public $ROTOrRUTPayment; // Field
  public $NoteText; // Field
  public $ServiceCommands; // AR302000PaymentSummaryServiceCommands
}

class AR302000PaymentSummaryServiceCommands {
  public $KeyType; // Key
  public $EveryType; // EveryValue
  public $KeyReferenceNbr; // Key
  public $EveryReferenceNbr; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000FinancialDetailsLinkToGL {
  public $DisplayName; // string
  public $BatchNbr; // Field
  public $Branch; // Field
  public $ARAccount; // Field
  public $ARSubaccount; // Field
  public $Project; // Field
  public $ProjectTask; // Field
  public $ServiceCommands; // AR302000FinancialDetailsLinkToGLServiceCommands
}

class AR302000FinancialDetailsLinkToGLServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000FinancialDetailsPaymentInformation {
  public $DisplayName; // string
  public $PaymentDate; // Field
  public $PaymentPeriod; // Field
  public $Cleared; // Field
  public $ClearDate; // Field
  public $BatchDeposit; // Field
  public $Deposited; // Field
  public $BatchDepositDate; // Field
  public $BatchDepositNbr; // Field
  public $ServiceCommands; // AR302000FinancialDetailsPaymentInformationServiceCommands
}

class AR302000FinancialDetailsPaymentInformationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000DocumentsToApply {
  public $DisplayName; // string
  public $DocumentType; // Field
  public $ReferenceNbr; // Field
  public $Customer; // Field
  public $AmountPaid; // Field
  public $CashDiscountTaken; // Field
  public $BalanceWriteOff; // Field
  public $WriteOffReasonCode; // Field
  public $Date; // Field
  public $DueDate; // Field
  public $CashDiscountDate; // Field
  public $CrossRate; // Field
  public $Balance; // Field
  public $CashDiscountBalance; // Field
  public $Description; // Field
  public $Currency; // Field
  public $PostPeriod; // Field
  public $CustomerOrder; // Field
  public $AdjustmentNbr; // Field
  public $NoteText; // Field
  public $ServiceCommands; // AR302000DocumentsToApplyServiceCommands
}

class AR302000DocumentsToApplyServiceCommands {
  public $KeyDocumentType; // Key
  public $KeyReferenceNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000ApplicationHistory {
  public $DisplayName; // string
  public $BatchNumber; // Field
  public $Type; // Field
  public $ReferenceNbr; // Field
  public $Customer; // Field
  public $AmountPaid; // Field
  public $CashDiscountTaken; // Field
  public $BalanceWriteOff; // Field
  public $ApplicationPeriod; // Field
  public $Date; // Field
  public $DueDate; // Field
  public $CashDiscountDate; // Field
  public $Balance; // Field
  public $CashDiscountBalance; // Field
  public $Description; // Field
  public $Currency; // Field
  public $PostPeriod; // Field
  public $CustomerOrder; // Field
  public $AdjustmentNbr; // Field
  public $AdjustsVAT; // Field
  public $VATCreditMemo; // Field
  public $NoteText; // Field
  public $ServiceCommands; // AR302000ApplicationHistoryServiceCommands
}

class AR302000ApplicationHistoryServiceCommands {
  public $KeyReferenceNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000OrdersToApply {
  public $DisplayName; // string
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $Status; // Field
  public $DocType; // Field
  public $ReferenceNbr; // Field
  public $AppliedToOrder; // Field
  public $TransferredToInvoice; // Field
  public $Date; // Field
  public $DueDate; // Field
  public $CashDiscountDate; // Field
  public $Balance; // Field
  public $Description; // Field
  public $OrderTotal; // Field
  public $Currency; // Field
  public $InvoiceNbr; // Field
  public $InvoiceDate; // Field
  public $NoteText; // Field
  public $ServiceCommands; // AR302000OrdersToApplyServiceCommands
}

class AR302000OrdersToApplyServiceCommands {
  public $KeyOrderType; // Key
  public $KeyOrderNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000PaymentSummaryRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // AR302000PaymentSummaryRateSelectionServiceCommands
}

class AR302000PaymentSummaryRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000CreditCardProcessingInfo {
  public $DisplayName; // string
  public $TranNbr; // Field
  public $ProcCenter; // Field
  public $TranType; // Field
  public $TranStatus; // Field
  public $TranAmount; // Field
  public $ReferencedTranNbr; // Field
  public $ProcCenterTranNbr; // Field
  public $ProcCenterAuthNbr; // Field
  public $PCResponseReason; // Field
  public $TranTime; // Field
  public $ProcStatus; // Field
  public $CVVVerification; // Field
  public $ErrorSource; // Field
  public $ErrorText; // Field
  public $ServiceCommands; // AR302000CreditCardProcessingInfoServiceCommands
}

class AR302000CreditCardProcessingInfoServiceCommands {
  public $KeyTranNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR302000FinanceCharges {
  public $DisplayName; // string
  public $EntryType; // Field
  public $Description; // Field
  public $OffsetAccount; // Field
  public $OffsetSubaccount; // Field
  public $Amount; // Field
  public $ServiceCommands; // AR302000FinanceChargesServiceCommands
}

class AR302000FinanceChargesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR302000RecordCCPaymentCCPaymentData {
  public $DisplayName; // string
  public $PCTranNumber; // Field
  public $AuthNumber; // Field
  public $ServiceCommands; // AR302000RecordCCPaymentCCPaymentDataServiceCommands
}

class AR302000RecordCCPaymentCCPaymentDataServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000CCPaymentWithExternalAuthorizationCCPaymentData {
  public $DisplayName; // string
  public $AuthNumber; // Field
  public $ServiceCommands; // AR302000CCPaymentWithExternalAuthorizationCCPaymentDataServiceCommands
}

class AR302000CCPaymentWithExternalAuthorizationCCPaymentDataServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000LoadOptions {
  public $DisplayName; // string
  public $FromDate; // Field
  public $StartRefNbr; // Field
  public $StartOrderNbr; // Field
  public $MaxDocs; // Field
  public $TillDate; // Field
  public $EndRefNbr; // Field
  public $EndOrderNbr; // Field
  public $LoadChildDocuments; // Field
  public $OrderBy; // Field
  public $SOOrderBy; // Field
  public $ServiceCommands; // AR302000LoadOptionsServiceCommands
}

class AR302000LoadOptionsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000FinancialDetailsVoucherDetails {
  public $DisplayName; // string
  public $VoucherBatchNbr; // Field
  public $WorkbookID; // Field
  public $ServiceCommands; // AR302000FinancialDetailsVoucherDetailsServiceCommands
}

class AR302000FinancialDetailsVoucherDetailsServiceCommands {
  public $KeyWorkbookID; // Key
  public $KeyVoucherBatchNbr; // Key
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR302000PrimaryKey {
  public $Type; // Value
  public $ReferenceNbr; // Value
}

class AR302000Clear {
}

class AR302000ClearResponse {
}

class AR302000GetProcessStatus {
}

class AR302000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class AR302000GetSchema {
}

class AR302000GetSchemaResponse {
  public $GetSchemaResult; // AR302000Content
}

class AR302000SetSchema {
  public $schema; // AR302000Content
}

class AR302000SetSchemaResponse {
}

class AR302000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class AR302000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class AR302000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class AR302000ImportResponse {
  public $ImportResult; // AR302000ArrayOfImportResult
}

class AR302000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // AR302000PrimaryKey
}

class AR302000ArrayOfImportResult {
  public $ImportResult; // AR302000ImportResult
}

class AR302000Submit {
  public $commands; // ArrayOfCommand
}

class AR302000ArrayOfContent {
  public $Content; // AR302000Content
}

class AR302000SubmitResponse {
  public $SubmitResult; // AR302000ArrayOfContent
}

class AR303000Content {
  public $Actions; // AR303000Actions
  public $CustomerSummary; // AR303000CustomerSummary
  public $GeneralInfo; // AR303000GeneralInfo
  public $GeneralInfoFinancialSettings; // AR303000GeneralInfoFinancialSettings
  public $GeneralInfoCreditVerificationRulesCreditVerification; // AR303000GeneralInfoCreditVerificationRulesCreditVerification
  public $BillingSettingsBillToContactSameAsMain; // AR303000BillingSettingsBillToContactSameAsMain
  public $BillingSettingsBillToAddressSameAsMain; // AR303000BillingSettingsBillToAddressSameAsMain
  public $BillingSettingsParentInfo; // AR303000BillingSettingsParentInfo
  public $BillingSettingsPrintAndEmailSettings; // AR303000BillingSettingsPrintAndEmailSettings
  public $BillingSettingsDefaultPaymentMethodDefaultPaymentMethod; // AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethod
  public $GLAccountsCashDiscountAccount; // AR303000GLAccountsCashDiscountAccount
  public $GeneralInfoMainAddress; // AR303000GeneralInfoMainAddress
  public $BillingSettingsBillToAddress; // AR303000BillingSettingsBillToAddress
  public $GeneralInfoMainContact; // AR303000GeneralInfoMainContact
  public $DeliverySettingsShippingContact; // AR303000DeliverySettingsShippingContact
  public $BillingSettingsBillToContact; // AR303000BillingSettingsBillToContact
  public $Locations; // AR303000Locations
  public $DeliverySettingsShippingContactSameAsMain; // AR303000DeliverySettingsShippingContactSameAsMain
  public $DeliverySettingsShippingAddress; // AR303000DeliverySettingsShippingAddress
  public $DeliverySettingsDefaultLocationSettings; // AR303000DeliverySettingsDefaultLocationSettings
  public $DeliverySettingsShippingInstructions; // AR303000DeliverySettingsShippingInstructions
  public $GLAccounts; // AR303000GLAccounts
  public $Contacts; // AR303000Contacts
  public $Salespersons; // AR303000Salespersons
  public $CustomerSummaryBalance; // AR303000CustomerSummaryBalance
  public $GeneralInfoCreditVerificationRules; // AR303000GeneralInfoCreditVerificationRules
  public $BillingSettingsDefaultPaymentMethod; // AR303000BillingSettingsDefaultPaymentMethod
  public $PaymentMethods; // AR303000PaymentMethods
  public $Attributes; // AR303000Attributes
  public $BillingSettingsDefaultPaymentMethodPaymentMethodDetails; // AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetails
  public $MailingSettingsMailings; // AR303000MailingSettingsMailings
  public $MailingSettingsRecipients; // AR303000MailingSettingsRecipients
  public $ChildAccounts; // AR303000ChildAccounts
  public $SpecifyNewID; // AR303000SpecifyNewID
}

class AR303000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $CopyDocumentEdit; // Action
  public $PasteDocumentEdit; // Action
  public $SaveTemplateEdit; // Action
  public $Delete; // Action
  public $First; // Action
  public $Prev; // Action
  public $Next; // Action
  public $Last; // Action
  public $ViewContact; // Action
  public $NewContact; // Action
  public $ViewLocation; // Action
  public $NewLocation; // Action
  public $SetDefault; // Action
  public $ViewMainOnMap; // Action
  public $ViewDefLocationOnMap; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $ViewRestrictionGroups; // Action
  public $ViewVendor; // Action
  public $ViewBusnessAccount; // Action
  public $ExtendToVendor; // Action
  public $CustomerDocuments; // Action
  public $StatementForCustomer; // Action
  public $ViewPaymentMethod; // Action
  public $AddPaymentMethod; // Action
  public $NewInvoiceMemo; // Action
  public $NewSalesOrder; // Action
  public $NewPayment; // Action
  public $WriteOffBalance; // Action
  public $ViewBillAddressOnMap; // Action
  public $RegenerateLastStatement; // Action
  public $ViewVendorAction; // Action
  public $ViewBusnessAccountAction; // Action
  public $NewInvoiceMemoAction; // Action
  public $NewSalesOrderAction; // Action
  public $NewPaymentAction; // Action
  public $WriteOffBalanceAction; // Action
  public $ExtendToVendorAction; // Action
  public $ViewRestrictionGroupsAction; // Action
  public $RegenerateLastStatementAction; // Action
  public $ValidateAddressesAction; // Action
  public $CustomerDocumentsInquiry; // Action
  public $StatementForCustomerInquiry; // Action
  public $SalesPriceInquiry; // Action
  public $ARBalanceByCustomerReport; // Action
  public $CustomerHistoryReport; // Action
  public $ARAgedPastDueReport; // Action
  public $ARAgedOutstandingReport; // Action
  public $ARRegisterReport; // Action
  public $CustomerDetailsReport; // Action
  public $CustomerStatementReport; // Action
  public $ARBalanceByCustomer; // Action
  public $CustomerHistory; // Action
  public $ARAgedPastDue; // Action
  public $ARAgedOutstanding; // Action
  public $ARRegister; // Action
  public $CustomerDetails; // Action
  public $CustomerStatement; // Action
  public $SalesPrice; // Action
  public $ValidateAddresses; // Action
  public $ChangeID; // Action
  public $ShowImportGraphErrors; // Action
}

class AR303000CustomerSummary {
  public $DisplayName; // string
  public $CustomerID; // Field
  public $CustomerName; // Field
  public $Status; // Field
  public $NoteText; // Field
  public $ServiceCommands; // AR303000CustomerSummaryServiceCommands
}

class AR303000CustomerSummaryServiceCommands {
  public $KeyCustomerID; // Key
  public $EveryCustomerID; // EveryValue
  public $FilterPhone1; // Field
  public $FilterCity; // Field
  public $FilterCountry; // Field
  public $FilterEmail; // Field
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GeneralInfo {
  public $DisplayName; // string
  public $AccountRef; // Field
  public $ServiceCommands; // AR303000GeneralInfoServiceCommands
}

class AR303000GeneralInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GeneralInfoFinancialSettings {
  public $DisplayName; // string
  public $CustomerClass; // Field
  public $Terms; // Field
  public $StatementCycleID; // Field
  public $AutoApplyPayments; // Field
  public $ApplyOverdueCharges; // Field
  public $EnableWriteOffs; // Field
  public $WriteOffLimit; // Field
  public $CurrencyID; // Field
  public $EnableCurrencyOverride; // Field
  public $CurrRateType; // Field
  public $EnableRateOverride; // Field
  public $ServiceCommands; // AR303000GeneralInfoFinancialSettingsServiceCommands
}

class AR303000GeneralInfoFinancialSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GeneralInfoCreditVerificationRulesCreditVerification {
  public $DisplayName; // string
  public $CreditVerification; // Field
  public $CreditLimit; // Field
  public $CreditDaysPastDue; // Field
  public $ServiceCommands; // AR303000GeneralInfoCreditVerificationRulesCreditVerificationServiceCommands
}

class AR303000GeneralInfoCreditVerificationRulesCreditVerificationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsBillToContactSameAsMain {
  public $DisplayName; // string
  public $SameAsMain; // Field
  public $ServiceCommands; // AR303000BillingSettingsBillToContactSameAsMainServiceCommands
}

class AR303000BillingSettingsBillToContactSameAsMainServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsBillToAddressSameAsMain {
  public $DisplayName; // string
  public $SameAsMain; // Field
  public $ServiceCommands; // AR303000BillingSettingsBillToAddressSameAsMainServiceCommands
}

class AR303000BillingSettingsBillToAddressSameAsMainServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsParentInfo {
  public $DisplayName; // string
  public $ParentAccount; // Field
  public $ConsolidateBalance; // Field
  public $ConsolidateStatements; // Field
  public $ServiceCommands; // AR303000BillingSettingsParentInfoServiceCommands
}

class AR303000BillingSettingsParentInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsPrintAndEmailSettings {
  public $DisplayName; // string
  public $SendInvoicesByEmail; // Field
  public $PrintInvoices; // Field
  public $SendDunningLettersByEmail; // Field
  public $PrintDunningLetters; // Field
  public $SendStatementsByEmail; // Field
  public $PrintStatements; // Field
  public $StatementType; // Field
  public $MultiCurrencyStatements; // Field
  public $ServiceCommands; // AR303000BillingSettingsPrintAndEmailSettingsServiceCommands
}

class AR303000BillingSettingsPrintAndEmailSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethod {
  public $DisplayName; // string
  public $DefaultPaymentMethod; // Field
  public $ServiceCommands; // AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethodServiceCommands
}

class AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethodServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GLAccountsCashDiscountAccount {
  public $DisplayName; // string
  public $CashDiscountAccount; // Field
  public $CashDiscountSub; // Field
  public $PrepaymentAccount; // Field
  public $PrepaymentSub; // Field
  public $COGSAccount; // Field
  public $COGSSub; // Field
  public $ServiceCommands; // AR303000GLAccountsCashDiscountAccountServiceCommands
}

class AR303000GLAccountsCashDiscountAccountServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GeneralInfoMainAddress {
  public $DisplayName; // string
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // AR303000GeneralInfoMainAddressServiceCommands
}

class AR303000GeneralInfoMainAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsBillToAddress {
  public $DisplayName; // string
  public $IsValidated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $CountryID; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // AR303000BillingSettingsBillToAddressServiceCommands
}

class AR303000BillingSettingsBillToAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GeneralInfoMainContact {
  public $DisplayName; // string
  public $CompanyName; // Field
  public $Attention; // Field
  public $Email; // Field
  public $Web; // Field
  public $Phone1; // Field
  public $Phone2; // Field
  public $Fax; // Field
  public $ServiceCommands; // AR303000GeneralInfoMainContactServiceCommands
}

class AR303000GeneralInfoMainContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000DeliverySettingsShippingContact {
  public $DisplayName; // string
  public $CompanyName; // Field
  public $Attention; // Field
  public $Email; // Field
  public $Web; // Field
  public $Phone1; // Field
  public $Phone2; // Field
  public $Fax; // Field
  public $ServiceCommands; // AR303000DeliverySettingsShippingContactServiceCommands
}

class AR303000DeliverySettingsShippingContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsBillToContact {
  public $DisplayName; // string
  public $FullName; // Field
  public $Salutation; // Field
  public $Phone1; // Field
  public $Phone2; // Field
  public $Fax; // Field
  public $EMail; // Field
  public $WebSite; // Field
  public $ServiceCommands; // AR303000BillingSettingsBillToContactServiceCommands
}

class AR303000BillingSettingsBillToContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000Locations {
  public $DisplayName; // string
  public $Active; // Field
  public $IsDefault; // Field
  public $LocationID; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $TaxZone; // Field
  public $PriceClassID; // Field
  public $SalesAccount; // Field
  public $SalesSub; // Field
  public $ServiceCommands; // AR303000LocationsServiceCommands
}

class AR303000LocationsServiceCommands {
  public $KeyLocationID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000DeliverySettingsShippingContactSameAsMain {
  public $DisplayName; // string
  public $SameAsMain; // Field
  public $ServiceCommands; // AR303000DeliverySettingsShippingContactSameAsMainServiceCommands
}

class AR303000DeliverySettingsShippingContactSameAsMainServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000DeliverySettingsShippingAddress {
  public $DisplayName; // string
  public $SameAsMain; // Field
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // AR303000DeliverySettingsShippingAddressServiceCommands
}

class AR303000DeliverySettingsShippingAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000DeliverySettingsDefaultLocationSettings {
  public $DisplayName; // string
  public $LocationName; // Field
  public $TaxRegistrationID; // Field
  public $TaxZone; // Field
  public $EntityUsageType; // Field
  public $ShippingBranch; // Field
  public $PriceClassID; // Field
  public $ServiceCommands; // AR303000DeliverySettingsDefaultLocationSettingsServiceCommands
}

class AR303000DeliverySettingsDefaultLocationSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000DeliverySettingsShippingInstructions {
  public $DisplayName; // string
  public $Warehouse; // Field
  public $ShipVia; // Field
  public $ShippingTerms; // Field
  public $ShippingZoneID; // Field
  public $FOBPoint; // Field
  public $ResidentialDelivery; // Field
  public $SaturdayDelivery; // Field
  public $Insurance; // Field
  public $ShippingRule; // Field
  public $OrderPriority; // Field
  public $LeadTimeDays; // Field
  public $ServiceCommands; // AR303000DeliverySettingsShippingInstructionsServiceCommands
}

class AR303000DeliverySettingsShippingInstructionsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GLAccounts {
  public $DisplayName; // string
  public $ARAccount; // Field
  public $ARSub; // Field
  public $SalesAccount; // Field
  public $SalesSub; // Field
  public $DiscountAccount; // Field
  public $DiscountSub; // Field
  public $FreightAccount; // Field
  public $FreightSub; // Field
  public $ServiceCommands; // AR303000GLAccountsServiceCommands
}

class AR303000GLAccountsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000Contacts {
  public $DisplayName; // string
  public $Active; // Field
  public $Position; // Field
  public $Name; // Field
  public $City; // Field
  public $Email; // Field
  public $Phone1; // Field
  public $NoteText; // Field
  public $ServiceCommands; // AR303000ContactsServiceCommands
}

class AR303000ContactsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000Salespersons {
  public $DisplayName; // string
  public $SalespersonID; // Field
  public $Name; // Field
  public $LocationName; // Field
  public $Commission; // Field
  public $Default; // Field
  public $ServiceCommands; // AR303000SalespersonsServiceCommands
}

class AR303000SalespersonsServiceCommands {
  public $KeySalespersonID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000CustomerSummaryBalance {
  public $DisplayName; // string
  public $Balance; // Field
  public $ConsolidatedBalance; // Field
  public $PrepaymentsBalance; // Field
  public $ServiceCommands; // AR303000CustomerSummaryBalanceServiceCommands
}

class AR303000CustomerSummaryBalanceServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000GeneralInfoCreditVerificationRules {
  public $DisplayName; // string
  public $UnreleasedBalance; // Field
  public $OpenOrdersBalance; // Field
  public $RemainingCreditLimit; // Field
  public $FirstDueDate; // Field
  public $ServiceCommands; // AR303000GeneralInfoCreditVerificationRulesServiceCommands
}

class AR303000GeneralInfoCreditVerificationRulesServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000BillingSettingsDefaultPaymentMethod {
  public $DisplayName; // string
  public $CCProcessingCenterID; // Field
  public $CustomerCCPID; // Field
  public $CashAccountID; // Field
  public $Descr; // Field
  public $ServiceCommands; // AR303000BillingSettingsDefaultPaymentMethodServiceCommands
}

class AR303000BillingSettingsDefaultPaymentMethodServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000PaymentMethods {
  public $DisplayName; // string
  public $IsDefault; // Field
  public $PaymentMethod; // Field
  public $Description; // Field
  public $CashAccount; // Field
  public $Active; // Field
  public $Override; // Field
  public $ServiceCommands; // AR303000PaymentMethodsServiceCommands
}

class AR303000PaymentMethodsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000Attributes {
  public $DisplayName; // string
  public $Attribute; // Field
  public $Required; // Field
  public $Value; // Field
  public $ServiceCommands; // AR303000AttributesServiceCommands
}

class AR303000AttributesServiceCommands {
  public $KeyAttribute; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetails {
  public $DisplayName; // string
  public $DescriptionDetailIDPaymentMethodDetailDescr; // Field
  public $Value; // Field
  public $ServiceCommands; // AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetailsServiceCommands
}

class AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000MailingSettingsMailings {
  public $DisplayName; // string
  public $MailingID; // Field
  public $Branch; // Field
  public $EmailAccount; // Field
  public $EmailAccountEmailAddress; // Field
  public $Report; // Field
  public $NotificationTemplate; // Field
  public $Format; // Field
  public $Active; // Field
  public $Overridden; // Field
  public $ServiceCommands; // AR303000MailingSettingsMailingsServiceCommands
}

class AR303000MailingSettingsMailingsServiceCommands {
  public $KeyMailingID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000MailingSettingsRecipients {
  public $DisplayName; // string
  public $ContactType; // Field
  public $ContactID; // Field
  public $Email; // Field
  public $Format; // Field
  public $Active; // Field
  public $Bcc; // Field
  public $ServiceCommands; // AR303000MailingSettingsRecipientsServiceCommands
}

class AR303000MailingSettingsRecipientsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000ChildAccounts {
  public $DisplayName; // string
  public $Customer; // Field
  public $CustomerName; // Field
  public $Balance; // Field
  public $PrepaymentsBalance; // Field
  public $UnreleasedBalance; // Field
  public $OpenOrdersBalance; // Field
  public $ConsolidateBalance; // Field
  public $ConsolidateStatements; // Field
  public $StatementCycle; // Field
  public $ServiceCommands; // AR303000ChildAccountsServiceCommands
}

class AR303000ChildAccountsServiceCommands {
  public $KeyCustomer; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class AR303000SpecifyNewID {
  public $DisplayName; // string
  public $CustomerID; // Field
  public $ServiceCommands; // AR303000SpecifyNewIDServiceCommands
}

class AR303000SpecifyNewIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class AR303000PrimaryKey {
  public $CustomerID; // Value
}

class AR303000Clear {
}

class AR303000ClearResponse {
}

class AR303000GetProcessStatus {
}

class AR303000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class AR303000GetSchema {
}

class AR303000GetSchemaResponse {
  public $GetSchemaResult; // AR303000Content
}

class AR303000SetSchema {
  public $schema; // AR303000Content
}

class AR303000SetSchemaResponse {
}

class AR303000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class AR303000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class AR303000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class AR303000ImportResponse {
  public $ImportResult; // AR303000ArrayOfImportResult
}

class AR303000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // AR303000PrimaryKey
}

class AR303000ArrayOfImportResult {
  public $ImportResult; // AR303000ImportResult
}

class AR303000Submit {
  public $commands; // ArrayOfCommand
}

class AR303000ArrayOfContent {
  public $Content; // AR303000Content
}

class AR303000SubmitResponse {
  public $SubmitResult; // AR303000ArrayOfContent
}

class CA304000Content {
  public $Actions; // CA304000Actions
  public $TransactionSummary; // CA304000TransactionSummary
  public $FinancialDetailsLinkToGL; // CA304000FinancialDetailsLinkToGL
  public $FinancialDetailsTaxSettings; // CA304000FinancialDetailsTaxSettings
  public $TransactionDetails; // CA304000TransactionDetails
  public $TaxDetails; // CA304000TaxDetails
  public $ApprovalDetails; // CA304000ApprovalDetails
  public $TransactionSummaryRateSelection; // CA304000TransactionSummaryRateSelection
  public $TransactionSummaryRateSelectionCurrencyUnitEquivalents; // CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalents
  public $FinancialDetailsVoucherDetails; // CA304000FinancialDetailsVoucherDetails
}

class CA304000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $Hold; // Action
  public $SetReleasedFlow; // Action
  public $ApproveAction; // Action
  public $RejectAction; // Action
  public $ReleaseAction; // Action
  public $ViewBatchInquiry; // Action
  public $ActivitiesInquiry; // Action
  public $ViewBatch; // Action
  public $Release; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $ShowImportGraphErrors; // Action
}

class CA304000TransactionSummary {
  public $DisplayName; // string
  public $TranType; // Field
  public $ReferenceNbr; // Field
  public $Status; // Field
  public $Hold; // Field
  public $Approved; // Field
  public $TranDate; // Field
  public $FinPeriod; // Field
  public $CuryViewState; // Field
  public $Description; // Field
  public $CashAccount; // Field
  public $Currency; // Field
  public $EntryType; // Field
  public $DisbReceipt; // Field
  public $DocumentRef; // Field
  public $Owner; // Field
  public $Amount; // Field
  public $VATTaxableTotal; // Field
  public $VATExemptTotal; // Field
  public $TaxTotal; // Field
  public $RoundingDiff; // Field
  public $ControlTotal; // Field
  public $TaxAmount; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CA304000TransactionSummaryServiceCommands
}

class CA304000TransactionSummaryServiceCommands {
  public $KeyReferenceNbr; // Key
  public $EveryReferenceNbr; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000FinancialDetailsLinkToGL {
  public $DisplayName; // string
  public $BatchNumber; // Field
  public $Branch; // Field
  public $Cleared; // Field
  public $ClearDate; // Field
  public $ServiceCommands; // CA304000FinancialDetailsLinkToGLServiceCommands
}

class CA304000FinancialDetailsLinkToGLServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000FinancialDetailsTaxSettings {
  public $DisplayName; // string
  public $TaxZone; // Field
  public $TaxCalculationMode; // Field
  public $ServiceCommands; // CA304000FinancialDetailsTaxSettingsServiceCommands
}

class CA304000FinancialDetailsTaxSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000TransactionDetails {
  public $DisplayName; // string
  public $LineNbr; // Field
  public $ItemID; // Field
  public $Description; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $Price; // Field
  public $Amount; // Field
  public $OffsetCashAccount; // Field
  public $OffsetAccount; // Field
  public $AccountDescription; // Field
  public $OffsetSubaccount; // Field
  public $Project; // Field
  public $NonBillable; // Field
  public $TaxCategory; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CA304000TransactionDetailsServiceCommands
}

class CA304000TransactionDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000TaxDetails {
  public $DisplayName; // string
  public $TaxID; // Field
  public $TaxRate; // Field
  public $TaxableAmount; // Field
  public $TaxAmount; // Field
  public $DeductibleTaxRate; // Field
  public $ExpenseAmount; // Field
  public $TaxType; // Field
  public $PendingVAT; // Field
  public $ReverseVAT; // Field
  public $IncludeInVATExemptTotal; // Field
  public $StatisticalVAT; // Field
  public $ServiceCommands; // CA304000TaxDetailsServiceCommands
}

class CA304000TaxDetailsServiceCommands {
  public $KeyTaxID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CA304000ApprovalDetails {
  public $DisplayName; // string
  public $Approver; // Field
  public $ApproverName; // Field
  public $ApprovedBy; // Field
  public $ApprovedByName; // Field
  public $Date; // Field
  public $Status; // Field
  public $Workgroup; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CA304000ApprovalDetailsServiceCommands
}

class CA304000ApprovalDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000TransactionSummaryRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // CA304000TransactionSummaryRateSelectionServiceCommands
}

class CA304000TransactionSummaryRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000FinancialDetailsVoucherDetails {
  public $DisplayName; // string
  public $VoucherBatchNbr; // Field
  public $WorkbookID; // Field
  public $ServiceCommands; // CA304000FinancialDetailsVoucherDetailsServiceCommands
}

class CA304000FinancialDetailsVoucherDetailsServiceCommands {
  public $KeyWorkbookID; // Key
  public $KeyVoucherBatchNbr; // Key
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CA304000PrimaryKey {
  public $ReferenceNbr; // Value
}

class CA304000Clear {
}

class CA304000ClearResponse {
}

class CA304000GetProcessStatus {
}

class CA304000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class CA304000GetSchema {
}

class CA304000GetSchemaResponse {
  public $GetSchemaResult; // CA304000Content
}

class CA304000SetSchema {
  public $schema; // CA304000Content
}

class CA304000SetSchemaResponse {
}

class CA304000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class CA304000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class CA304000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class CA304000ImportResponse {
  public $ImportResult; // CA304000ArrayOfImportResult
}

class CA304000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // CA304000PrimaryKey
}

class CA304000ArrayOfImportResult {
  public $ImportResult; // CA304000ImportResult
}

class CA304000Submit {
  public $commands; // ArrayOfCommand
}

class CA304000ArrayOfContent {
  public $Content; // CA304000Content
}

class CA304000SubmitResponse {
  public $SubmitResult; // CA304000ArrayOfContent
}

class CR301000Content {
  public $Actions; // CR301000Actions
  public $LeadSummary; // CR301000LeadSummary
  public $DetailsSummary; // CR301000DetailsSummary
  public $DetailsContact; // CR301000DetailsContact
  public $DetailsCRM; // CR301000DetailsCRM
  public $DetailsAddressSameAsInAccount; // CR301000DetailsAddressSameAsInAccount
  public $DetailsAddress; // CR301000DetailsAddress
  public $Attributes; // CR301000Attributes
  public $Activities; // CR301000Activities
  public $Relations; // CR301000Relations
  public $Campaigns; // CR301000Campaigns
  public $MarketingLists; // CR301000MarketingLists
  public $Duplicates; // CR301000Duplicates
  public $NewAccountServicesSettings; // CR301000NewAccountServicesSettings
  public $NewOpportunityServicesSettings; // CR301000NewOpportunityServicesSettings
  public $PleaseResolveTheConflictsContactID; // CR301000PleaseResolveTheConflictsContactID
  public $PleaseResolveTheConflicts; // CR301000PleaseResolveTheConflicts
}

class CR301000Actions {
  public $CancelCloseToList; // Action
  public $SaveCloseToList; // Action
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $ValidateAddress; // Action
  public $ViewOnMap; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $OpportunitiesViewDetails; // Action
  public $OpportunitiesContactViewDetails; // Action
  public $MembersCRCampaignViewDetails; // Action
  public $SubscriptionsCRMarketingListViewDetails; // Action
  public $Merge; // Action
  public $AttachToAccount; // Action
  public $DuplicatesContactViewDetails; // Action
  public $DuplicatesBAccountViewDetails; // Action
  public $ConvertToContactAction; // Action
  public $ConvertToOpportunityAction; // Action
  public $ConvertToBAccountAction; // Action
  public $CheckForDuplicatesAction; // Action
  public $MarkAsValidatedAction; // Action
  public $ValidateAddressAction; // Action
  public $CloseAsDuplicateAction; // Action
  public $ConvertToContact; // Action
  public $ConvertToOpportunity; // Action
  public $ConvertToBAccount; // Action
  public $CheckForDuplicates; // Action
  public $RelationsEntityDetails; // Action
  public $RelationsContactDetails; // Action
  public $ResetListNavigation; // Action
  public $ShowImportGraphErrors; // Action
}

class CR301000LeadSummary {
  public $DisplayName; // string
  public $LeadID; // Field
  public $LeadIDDisplayName; // Field
  public $Status; // Field
  public $Reason; // Field
  public $Workgroup; // Field
  public $WorkgroupDescription; // Field
  public $Owner; // Field
  public $OwnerEmployeeName; // Field
  public $Duplicate; // Field
  public $DuplicateFound; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR301000LeadSummaryServiceCommands
}

class CR301000LeadSummaryServiceCommands {
  public $KeyLeadID; // Key
  public $EveryLeadID; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000DetailsSummary {
  public $DisplayName; // string
  public $Title; // Field
  public $FirstName; // Field
  public $LastName; // Field
  public $Position; // Field
  public $BusinessAccount; // Field
  public $CompanyName; // Field
  public $ParentBusinessAccount; // Field
  public $ServiceCommands; // CR301000DetailsSummaryServiceCommands
}

class CR301000DetailsSummaryServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000DetailsContact {
  public $DisplayName; // string
  public $Email; // Field
  public $Web; // Field
  public $Phone1Type; // Field
  public $Phone1; // Field
  public $Phone2Type; // Field
  public $Phone2; // Field
  public $Phone3Type; // Field
  public $Phone3; // Field
  public $FaxType; // Field
  public $Fax; // Field
  public $ServiceCommands; // CR301000DetailsContactServiceCommands
}

class CR301000DetailsContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000DetailsCRM {
  public $DisplayName; // string
  public $LeadClass; // Field
  public $Source; // Field
  public $CampaignID; // Field
  public $ConvertedBy; // Field
  public $QualificationDate; // Field
  public $ContactMethod; // Field
  public $DoNotCall; // Field
  public $DoNotFax; // Field
  public $DoNotEmail; // Field
  public $DoNotMail; // Field
  public $NoMassMail; // Field
  public $NoMarketing; // Field
  public $LastIncomingActivity; // Field
  public $LastOutgoingActivity; // Field
  public $ServiceCommands; // CR301000DetailsCRMServiceCommands
}

class CR301000DetailsCRMServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000DetailsAddressSameAsInAccount {
  public $DisplayName; // string
  public $SameAsInAccount; // Field
  public $ServiceCommands; // CR301000DetailsAddressSameAsInAccountServiceCommands
}

class CR301000DetailsAddressSameAsInAccountServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000DetailsAddress {
  public $DisplayName; // string
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // CR301000DetailsAddressServiceCommands
}

class CR301000DetailsAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000Attributes {
  public $DisplayName; // string
  public $Attribute; // Field
  public $Required; // Field
  public $Value; // Field
  public $ServiceCommands; // CR301000AttributesServiceCommands
}

class CR301000AttributesServiceCommands {
  public $KeyAttribute; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR301000Activities {
  public $DisplayName; // string
  public $IsCompleteIcon; // Field
  public $PriorityIcon; // Field
  public $ReminderIcon; // Field
  public $ClassIcon; // Field
  public $Type; // Field
  public $Summary; // Field
  public $Status; // Field
  public $MailStatus; // Field
  public $Released; // Field
  public $StartDate; // Field
  public $CreatedAt; // Field
  public $TimeSpent; // Field
  public $CreatedByCreatedByIDCreatorUsername; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $ProjectTask; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR301000ActivitiesServiceCommands
}

class CR301000ActivitiesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000Relations {
  public $DisplayName; // string
  public $Role; // Field
  public $AccountEmployee; // Field
  public $Name; // Field
  public $Contact; // Field
  public $ContactDisplayName; // Field
  public $Email; // Field
  public $AddToCC; // Field
  public $ServiceCommands; // CR301000RelationsServiceCommands
}

class CR301000RelationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR301000Campaigns {
  public $DisplayName; // string
  public $CampaignID; // Field
  public $CampaignName; // Field
  public $Status; // Field
  public $ServiceCommands; // CR301000CampaignsServiceCommands
}

class CR301000CampaignsServiceCommands {
  public $KeyCampaignID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR301000MarketingLists {
  public $DisplayName; // string
  public $MarketingListID; // Field
  public $Name; // Field
  public $Activated; // Field
  public $Format; // Field
  public $ServiceCommands; // CR301000MarketingListsServiceCommands
}

class CR301000MarketingListsServiceCommands {
  public $KeyMarketingListID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR301000Duplicates {
  public $DisplayName; // string
  public $Type; // Field
  public $LastModifiedDate; // Field
  public $DisplayName_; // Field
  public $BusinessAccount; // Field
  public $BusinessAccountType; // Field
  public $AccountName; // Field
  public $Email; // Field
  public $ServiceCommands; // CR301000DuplicatesServiceCommands
}

class CR301000DuplicatesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR301000NewAccountServicesSettings {
  public $DisplayName; // string
  public $BAccountID; // Field
  public $AccountName; // Field
  public $AccountClass; // Field
  public $ServiceCommands; // CR301000NewAccountServicesSettingsServiceCommands
}

class CR301000NewAccountServicesSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000NewOpportunityServicesSettings {
  public $DisplayName; // string
  public $OpportunityID; // Field
  public $ServiceCommands; // CR301000NewOpportunityServicesSettingsServiceCommands
}

class CR301000NewOpportunityServicesSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000PleaseResolveTheConflictsContactID {
  public $DisplayName; // string
  public $ContactID; // Field
  public $ServiceCommands; // CR301000PleaseResolveTheConflictsContactIDServiceCommands
}

class CR301000PleaseResolveTheConflictsContactIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR301000PleaseResolveTheConflicts {
  public $DisplayName; // string
  public $NameDisplayName; // Field
  public $Value; // Field
  public $ServiceCommands; // CR301000PleaseResolveTheConflictsServiceCommands
}

class CR301000PleaseResolveTheConflictsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR301000PrimaryKey {
  public $LeadID; // Value
}

class CR301000Clear {
}

class CR301000ClearResponse {
}

class CR301000GetProcessStatus {
}

class CR301000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class CR301000GetSchema {
}

class CR301000GetSchemaResponse {
  public $GetSchemaResult; // CR301000Content
}

class CR301000SetSchema {
  public $schema; // CR301000Content
}

class CR301000SetSchemaResponse {
}

class CR301000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class CR301000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class CR301000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class CR301000ImportResponse {
  public $ImportResult; // CR301000ArrayOfImportResult
}

class CR301000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // CR301000PrimaryKey
}

class CR301000ArrayOfImportResult {
  public $ImportResult; // CR301000ImportResult
}

class CR301000Submit {
  public $commands; // ArrayOfCommand
}

class CR301000ArrayOfContent {
  public $Content; // CR301000Content
}

class CR301000SubmitResponse {
  public $SubmitResult; // CR301000ArrayOfContent
}

class CR302000Content {
  public $Actions; // CR302000Actions
  public $ContactSummary; // CR302000ContactSummary
  public $DetailsSummary; // CR302000DetailsSummary
  public $DetailsContact; // CR302000DetailsContact
  public $DetailsCRM; // CR302000DetailsCRM
  public $AdditionalInfoCommon; // CR302000AdditionalInfoCommon
  public $AdditionalInfoLeadHistory; // CR302000AdditionalInfoLeadHistory
  public $AdditionalInfoSynchronization; // CR302000AdditionalInfoSynchronization
  public $AdditionalInfoPhoto; // CR302000AdditionalInfoPhoto
  public $DetailsAddressSameAsInAccount; // CR302000DetailsAddressSameAsInAccount
  public $DetailsAddress; // CR302000DetailsAddress
  public $UserInfo; // CR302000UserInfo
  public $UserInfoChangePasswordResetPassword; // CR302000UserInfoChangePasswordResetPassword
  public $UserInfo_; // CR302000UserInfo_
  public $Attributes; // CR302000Attributes
  public $Activities; // CR302000Activities
  public $Relations; // CR302000Relations
  public $Opportunities; // CR302000Opportunities
  public $Cases; // CR302000Cases
  public $Campaigns; // CR302000Campaigns
  public $MarketingLists; // CR302000MarketingLists
  public $Notifications; // CR302000Notifications
  public $Duplicates; // CR302000Duplicates
  public $NewAccountServicesSettings; // CR302000NewAccountServicesSettings
  public $PleaseResolveTheConflictsContactID; // CR302000PleaseResolveTheConflictsContactID
  public $PleaseResolveTheConflicts; // CR302000PleaseResolveTheConflicts
}

class CR302000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $ValidateAddress; // Action
  public $ViewOnMap; // Action
  public $ResetPassword; // Action
  public $ResetPasswordOK; // Action
  public $ActivateLogin; // Action
  public $EnableLogin; // Action
  public $DisableLogin; // Action
  public $UnlockLogin; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $OpportunitiesViewDetails; // Action
  public $OpportunitiesContactViewDetails; // Action
  public $CasesViewDetails; // Action
  public $MembersCRCampaignViewDetails; // Action
  public $SubscriptionsCRMarketingListViewDetails; // Action
  public $Merge; // Action
  public $AttachToAccount; // Action
  public $DuplicatesContactViewDetails; // Action
  public $DuplicatesBAccountViewDetails; // Action
  public $AddOpportunityAction; // Action
  public $AddCaseAction; // Action
  public $CopyBAccountContactInfoAction; // Action
  public $ValidateAddressAction; // Action
  public $CheckForDuplicatesAction; // Action
  public $MarkAsValidatedAction; // Action
  public $CloseAsDuplicateAction; // Action
  public $ConvertToBAccountAction; // Action
  public $AddOpportunity; // Action
  public $AddCase; // Action
  public $CopyBAccountContactInfo; // Action
  public $CheckForDuplicates; // Action
  public $ConvertToBAccount; // Action
  public $RelationsEntityDetails; // Action
  public $RelationsContactDetails; // Action
  public $ShowImportGraphErrors; // Action
}

class CR302000ContactSummary {
  public $DisplayName; // string
  public $ContactID; // Field
  public $ContactIDDisplayName; // Field
  public $Type; // Field
  public $Active; // Field
  public $Workgroup; // Field
  public $WorkgroupDescription; // Field
  public $Owner; // Field
  public $OwnerEmployeeName; // Field
  public $Duplicate; // Field
  public $DuplicateFound; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR302000ContactSummaryServiceCommands
}

class CR302000ContactSummaryServiceCommands {
  public $KeyContactID; // Key
  public $EveryContactID; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000DetailsSummary {
  public $DisplayName; // string
  public $Title; // Field
  public $FirstName; // Field
  public $LastName; // Field
  public $Position; // Field
  public $BusinessAccount; // Field
  public $CompanyName; // Field
  public $ParentBusinessAccount; // Field
  public $ServiceCommands; // CR302000DetailsSummaryServiceCommands
}

class CR302000DetailsSummaryServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000DetailsContact {
  public $DisplayName; // string
  public $Email; // Field
  public $Web; // Field
  public $Phone1Type; // Field
  public $Phone1; // Field
  public $Phone2Type; // Field
  public $Phone2; // Field
  public $Phone3Type; // Field
  public $Phone3; // Field
  public $FaxType; // Field
  public $Fax; // Field
  public $ServiceCommands; // CR302000DetailsContactServiceCommands
}

class CR302000DetailsContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000DetailsCRM {
  public $DisplayName; // string
  public $ContactClass; // Field
  public $ContactMethod; // Field
  public $DoNotCall; // Field
  public $DoNotFax; // Field
  public $DoNotEmail; // Field
  public $DoNotMail; // Field
  public $NoMassMail; // Field
  public $NoMarketing; // Field
  public $DateOfBirth; // Field
  public $LastIncomingActivity; // Field
  public $LastOutgoingActivity; // Field
  public $ServiceCommands; // CR302000DetailsCRMServiceCommands
}

class CR302000DetailsCRMServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000AdditionalInfoCommon {
  public $DisplayName; // string
  public $Gender; // Field
  public $MaritalStatus; // Field
  public $SpousePartnerName; // Field
  public $ServiceCommands; // CR302000AdditionalInfoCommonServiceCommands
}

class CR302000AdditionalInfoCommonServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000AdditionalInfoLeadHistory {
  public $DisplayName; // string
  public $Source; // Field
  public $CampaignID; // Field
  public $Status; // Field
  public $Reason; // Field
  public $ConvertedBy; // Field
  public $QualificationDate; // Field
  public $ServiceCommands; // CR302000AdditionalInfoLeadHistoryServiceCommands
}

class CR302000AdditionalInfoLeadHistoryServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000AdditionalInfoSynchronization {
  public $DisplayName; // string
  public $Synchronize; // Field
  public $ServiceCommands; // CR302000AdditionalInfoSynchronizationServiceCommands
}

class CR302000AdditionalInfoSynchronizationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000AdditionalInfoPhoto {
  public $DisplayName; // string
  public $Image; // Field
  public $ServiceCommands; // CR302000AdditionalInfoPhotoServiceCommands
}

class CR302000AdditionalInfoPhotoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000DetailsAddressSameAsInAccount {
  public $DisplayName; // string
  public $SameAsInAccount; // Field
  public $ServiceCommands; // CR302000DetailsAddressSameAsInAccountServiceCommands
}

class CR302000DetailsAddressSameAsInAccountServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000DetailsAddress {
  public $DisplayName; // string
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // CR302000DetailsAddressServiceCommands
}

class CR302000DetailsAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000UserInfo {
  public $DisplayName; // string
  public $Status; // Field
  public $UserType; // Field
  public $Login; // Field
  public $Password; // Field
  public $GeneratePassword; // Field
  public $ServiceCommands; // CR302000UserInfoServiceCommands
}

class CR302000UserInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000UserInfoChangePasswordResetPassword {
  public $DisplayName; // string
  public $NewPassword; // Field
  public $ConfirmPassword; // Field
  public $ServiceCommands; // CR302000UserInfoChangePasswordResetPasswordServiceCommands
}

class CR302000UserInfoChangePasswordResetPasswordServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000UserInfo_ {
  public $DisplayName; // string
  public $Selected; // Field
  public $RoleName; // Field
  public $RoleDescription; // Field
  public $ServiceCommands; // CR302000UserInfo_ServiceCommands
}

class CR302000UserInfo_ServiceCommands {
  public $KeyRoleName; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000Attributes {
  public $DisplayName; // string
  public $Attribute; // Field
  public $Required; // Field
  public $Value; // Field
  public $ServiceCommands; // CR302000AttributesServiceCommands
}

class CR302000AttributesServiceCommands {
  public $KeyAttribute; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000Activities {
  public $DisplayName; // string
  public $IsCompleteIcon; // Field
  public $PriorityIcon; // Field
  public $ReminderIcon; // Field
  public $ClassIcon; // Field
  public $Type; // Field
  public $Summary; // Field
  public $Status; // Field
  public $MailStatus; // Field
  public $Released; // Field
  public $StartDate; // Field
  public $CreatedAt; // Field
  public $TimeSpent; // Field
  public $CreatedByCreatedByIDCreatorUsername; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $ProjectTask; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR302000ActivitiesServiceCommands
}

class CR302000ActivitiesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000Relations {
  public $DisplayName; // string
  public $Role; // Field
  public $AccountEmployee; // Field
  public $Name; // Field
  public $Contact; // Field
  public $ContactDisplayName; // Field
  public $Email; // Field
  public $AddToCC; // Field
  public $ServiceCommands; // CR302000RelationsServiceCommands
}

class CR302000RelationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000Opportunities {
  public $DisplayName; // string
  public $OpportunityID; // Field
  public $Subject; // Field
  public $Stage; // Field
  public $Probability; // Field
  public $Status; // Field
  public $Total; // Field
  public $Currency; // Field
  public $Estimation; // Field
  public $DisplayName_; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR302000OpportunitiesServiceCommands
}

class CR302000OpportunitiesServiceCommands {
  public $KeyOpportunityID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000Cases {
  public $DisplayName; // string
  public $CaseID; // Field
  public $Subject; // Field
  public $ClassID; // Field
  public $Severity; // Field
  public $Status; // Field
  public $Reason; // Field
  public $DateReported; // Field
  public $InitResponse; // Field
  public $Estimation; // Field
  public $ClosingDate; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR302000CasesServiceCommands
}

class CR302000CasesServiceCommands {
  public $KeyCaseID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000Campaigns {
  public $DisplayName; // string
  public $CampaignID; // Field
  public $CampaignName; // Field
  public $Status; // Field
  public $ServiceCommands; // CR302000CampaignsServiceCommands
}

class CR302000CampaignsServiceCommands {
  public $KeyCampaignID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000MarketingLists {
  public $DisplayName; // string
  public $MarketingListID; // Field
  public $Name; // Field
  public $Activated; // Field
  public $Format; // Field
  public $ServiceCommands; // CR302000MarketingListsServiceCommands
}

class CR302000MarketingListsServiceCommands {
  public $KeyMarketingListID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000Notifications {
  public $DisplayName; // string
  public $Module; // Field
  public $Source; // Field
  public $MailingID; // Field
  public $ClassID; // Field
  public $Description; // Field
  public $Report; // Field
  public $NotificationID; // Field
  public $Format; // Field
  public $Bcc; // Field
  public $Active; // Field
  public $ServiceCommands; // CR302000NotificationsServiceCommands
}

class CR302000NotificationsServiceCommands {
  public $KeyNotificationID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000Duplicates {
  public $DisplayName; // string
  public $Type; // Field
  public $BusinessAccountType; // Field
  public $LastModifiedDate; // Field
  public $DisplayName_; // Field
  public $BusinessAccount; // Field
  public $AccountName; // Field
  public $Email; // Field
  public $ContactIDContact2ContactID; // Field
  public $ServiceCommands; // CR302000DuplicatesServiceCommands
}

class CR302000DuplicatesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000NewAccountServicesSettings {
  public $DisplayName; // string
  public $BAccountID; // Field
  public $AccountName; // Field
  public $AccountClass; // Field
  public $ServiceCommands; // CR302000NewAccountServicesSettingsServiceCommands
}

class CR302000NewAccountServicesSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000PleaseResolveTheConflictsContactID {
  public $DisplayName; // string
  public $ContactID; // Field
  public $ServiceCommands; // CR302000PleaseResolveTheConflictsContactIDServiceCommands
}

class CR302000PleaseResolveTheConflictsContactIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR302000PleaseResolveTheConflicts {
  public $DisplayName; // string
  public $NameDisplayName; // Field
  public $Value; // Field
  public $ServiceCommands; // CR302000PleaseResolveTheConflictsServiceCommands
}

class CR302000PleaseResolveTheConflictsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR302000PrimaryKey {
  public $ContactID; // Value
}

class CR302000Clear {
}

class CR302000ClearResponse {
}

class CR302000GetProcessStatus {
}

class CR302000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class CR302000GetSchema {
}

class CR302000GetSchemaResponse {
  public $GetSchemaResult; // CR302000Content
}

class CR302000SetSchema {
  public $schema; // CR302000Content
}

class CR302000SetSchemaResponse {
}

class CR302000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class CR302000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class CR302000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class CR302000ImportResponse {
  public $ImportResult; // CR302000ArrayOfImportResult
}

class CR302000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // CR302000PrimaryKey
}

class CR302000ArrayOfImportResult {
  public $ImportResult; // CR302000ImportResult
}

class CR302000Submit {
  public $commands; // ArrayOfCommand
}

class CR302000ArrayOfContent {
  public $Content; // CR302000Content
}

class CR302000SubmitResponse {
  public $SubmitResult; // CR302000ArrayOfContent
}

class CR303000Content {
  public $Actions; // CR303000Actions
  public $AccountSummary; // CR303000AccountSummary
  public $DetailsCRM; // CR303000DetailsCRM
  public $Locations; // CR303000Locations
  public $DeliverySettingsShippingContactSameAsMain; // CR303000DeliverySettingsShippingContactSameAsMain
  public $DeliverySettingsDefaultLocationSettings; // CR303000DeliverySettingsDefaultLocationSettings
  public $DeliverySettingsShippingInstructions; // CR303000DeliverySettingsShippingInstructions
  public $DeliverySettingsShippingAddressSameAsMain; // CR303000DeliverySettingsShippingAddressSameAsMain
  public $DetailsMainAddress; // CR303000DetailsMainAddress
  public $DeliverySettingsShippingAddress; // CR303000DeliverySettingsShippingAddress
  public $DetailsMainContact; // CR303000DetailsMainContact
  public $Contacts; // CR303000Contacts
  public $DeliverySettingsShippingContact; // CR303000DeliverySettingsShippingContact
  public $Attributes; // CR303000Attributes
  public $Activities; // CR303000Activities
  public $SelectContact; // CR303000SelectContact
  public $Opportunities; // CR303000Opportunities
  public $Relations; // CR303000Relations
  public $Cases; // CR303000Cases
  public $Contracts; // CR303000Contracts
  public $Orders; // CR303000Orders
  public $Campaigns; // CR303000Campaigns
  public $MarketingLists; // CR303000MarketingLists
  public $Duplicates; // CR303000Duplicates
  public $PleaseResolveTheConflictsBAccountID; // CR303000PleaseResolveTheConflictsBAccountID
  public $PleaseResolveTheConflicts; // CR303000PleaseResolveTheConflicts
  public $SpecifyNewID; // CR303000SpecifyNewID
}

class CR303000Actions {
  public $CancelCloseToList; // Action
  public $SaveCloseToList; // Action
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $ContactsViewDetails; // Action
  public $LocationsViewDetails; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $OpportunitiesViewDetails; // Action
  public $OpportunitiesBAccountViewDetails; // Action
  public $OpportunitiesContactViewDetails; // Action
  public $CasesViewDetails; // Action
  public $CasesContactViewDetails; // Action
  public $ContractsViewDetails; // Action
  public $ContractsLocationViewDetails; // Action
  public $ContractsBAccountViewDetails; // Action
  public $OrdersViewDetails; // Action
  public $MembersCRCampaignViewDetails; // Action
  public $SubscriptionsCRMarketingListViewDetails; // Action
  public $Merge; // Action
  public $DuplicatesContactViewDetails; // Action
  public $ViewCustomerAction; // Action
  public $ViewVendorAction; // Action
  public $ConverToCustomerAction; // Action
  public $ConverToVendorAction; // Action
  public $ValidateAddressesAction; // Action
  public $CheckForDuplicatesAction; // Action
  public $MarkAsValidatedAction; // Action
  public $ViewDuplicateAccount; // Action
  public $ViewCustomer; // Action
  public $ViewVendor; // Action
  public $ConverToCustomer; // Action
  public $ConverToVendor; // Action
  public $AddOpportunity; // Action
  public $AddCase; // Action
  public $MarkAsValidated; // Action
  public $AddContact; // Action
  public $AddLocation; // Action
  public $SetDefaultLocation; // Action
  public $ViewMainOnMap; // Action
  public $ViewDefLocationOnMap; // Action
  public $ValidateAddresses; // Action
  public $CheckForDuplicates; // Action
  public $ChangeID; // Action
  public $RelationsEntityDetails; // Action
  public $RelationsContactDetails; // Action
  public $ResetListNavigation; // Action
  public $ShowImportGraphErrors; // Action
}

class CR303000AccountSummary {
  public $DisplayName; // string
  public $BusinessAccount; // Field
  public $BusinessAccountName; // Field
  public $Status; // Field
  public $Workgroup; // Field
  public $WorkgroupDescription; // Field
  public $Owner; // Field
  public $OwnerEmployeeName; // Field
  public $Type; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000AccountSummaryServiceCommands
}

class CR303000AccountSummaryServiceCommands {
  public $KeyBusinessAccount; // Key
  public $EveryBusinessAccount; // EveryValue
  public $FilterPhone1; // Field
  public $FilterCity; // Field
  public $FilterCountry; // Field
  public $FilterEmail; // Field
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DetailsCRM {
  public $DisplayName; // string
  public $ClassID; // Field
  public $AccountRef; // Field
  public $ParentAccount; // Field
  public $Duplicate; // Field
  public $LastIncomingActivity; // Field
  public $LastOutgoingActivity; // Field
  public $ServiceCommands; // CR303000DetailsCRMServiceCommands
}

class CR303000DetailsCRMServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Locations {
  public $DisplayName; // string
  public $LocationID; // Field
  public $Active; // Field
  public $Default; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $TaxZone; // Field
  public $PriceClass; // Field
  public $SalesAccount; // Field
  public $SalesSub; // Field
  public $ServiceCommands; // CR303000LocationsServiceCommands
}

class CR303000LocationsServiceCommands {
  public $KeyLocationID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000DeliverySettingsShippingContactSameAsMain {
  public $DisplayName; // string
  public $SameAsMain; // Field
  public $ServiceCommands; // CR303000DeliverySettingsShippingContactSameAsMainServiceCommands
}

class CR303000DeliverySettingsShippingContactSameAsMainServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DeliverySettingsDefaultLocationSettings {
  public $DisplayName; // string
  public $LocationName; // Field
  public $TaxRegistrationID; // Field
  public $TaxZone; // Field
  public $ShippingBranch; // Field
  public $PriceClass; // Field
  public $ServiceCommands; // CR303000DeliverySettingsDefaultLocationSettingsServiceCommands
}

class CR303000DeliverySettingsDefaultLocationSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DeliverySettingsShippingInstructions {
  public $DisplayName; // string
  public $Warehouse; // Field
  public $ShipVia; // Field
  public $ShippingTerms; // Field
  public $ShippingZone; // Field
  public $FOBPoint; // Field
  public $ResidentialDelivery; // Field
  public $SaturdayDelivery; // Field
  public $Insurance; // Field
  public $ShippingRule; // Field
  public $OrderPriority; // Field
  public $LeadTimeDays; // Field
  public $ServiceCommands; // CR303000DeliverySettingsShippingInstructionsServiceCommands
}

class CR303000DeliverySettingsShippingInstructionsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DeliverySettingsShippingAddressSameAsMain {
  public $DisplayName; // string
  public $SameAsMain; // Field
  public $ServiceCommands; // CR303000DeliverySettingsShippingAddressSameAsMainServiceCommands
}

class CR303000DeliverySettingsShippingAddressSameAsMainServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DetailsMainAddress {
  public $DisplayName; // string
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // CR303000DetailsMainAddressServiceCommands
}

class CR303000DetailsMainAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DeliverySettingsShippingAddress {
  public $DisplayName; // string
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // CR303000DeliverySettingsShippingAddressServiceCommands
}

class CR303000DeliverySettingsShippingAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DetailsMainContact {
  public $DisplayName; // string
  public $CompanyName; // Field
  public $Position; // Field
  public $Email; // Field
  public $Web; // Field
  public $Phone1Type; // Field
  public $Phone1; // Field
  public $Phone2Type; // Field
  public $Phone2; // Field
  public $FaxType; // Field
  public $Fax; // Field
  public $DuplicateFound; // Field
  public $ServiceCommands; // CR303000DetailsMainContactServiceCommands
}

class CR303000DetailsMainContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Contacts {
  public $DisplayName; // string
  public $DisplayName_; // Field
  public $Position; // Field
  public $Active; // Field
  public $City; // Field
  public $Email; // Field
  public $Phone1; // Field
  public $Workgroup; // Field
  public $Type; // Field
  public $Owner; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000ContactsServiceCommands
}

class CR303000ContactsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000DeliverySettingsShippingContact {
  public $DisplayName; // string
  public $Position; // Field
  public $Email; // Field
  public $Phone1; // Field
  public $Phone2; // Field
  public $Fax; // Field
  public $ServiceCommands; // CR303000DeliverySettingsShippingContactServiceCommands
}

class CR303000DeliverySettingsShippingContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Attributes {
  public $DisplayName; // string
  public $Attribute; // Field
  public $Required; // Field
  public $Value; // Field
  public $ServiceCommands; // CR303000AttributesServiceCommands
}

class CR303000AttributesServiceCommands {
  public $KeyAttribute; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000Activities {
  public $DisplayName; // string
  public $IsCompleteIcon; // Field
  public $PriorityIcon; // Field
  public $ReminderIcon; // Field
  public $ClassIcon; // Field
  public $Type; // Field
  public $Summary; // Field
  public $Status; // Field
  public $MailStatus; // Field
  public $Released; // Field
  public $StartDate; // Field
  public $CreatedAt; // Field
  public $TimeSpent; // Field
  public $CreatedByCreatedByIDCreatorUsername; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $ProjectTask; // Field
  public $RelatedEntityDescription; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000ActivitiesServiceCommands
}

class CR303000ActivitiesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000SelectContact {
  public $DisplayName; // string
  public $ContactID; // Field
  public $ContactIDDisplayName; // Field
  public $ServiceCommands; // CR303000SelectContactServiceCommands
}

class CR303000SelectContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Opportunities {
  public $DisplayName; // string
  public $OpportunityID; // Field
  public $Subject; // Field
  public $Stage; // Field
  public $Probability; // Field
  public $Status; // Field
  public $Total; // Field
  public $Currency; // Field
  public $Estimation; // Field
  public $BusinessAccount; // Field
  public $BusinessAccountName; // Field
  public $DisplayName_; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000OpportunitiesServiceCommands
}

class CR303000OpportunitiesServiceCommands {
  public $KeyOpportunityID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Relations {
  public $DisplayName; // string
  public $Role; // Field
  public $AccountEmployee; // Field
  public $Name; // Field
  public $Contact; // Field
  public $ContactDisplayName; // Field
  public $Email; // Field
  public $AddToCC; // Field
  public $ServiceCommands; // CR303000RelationsServiceCommands
}

class CR303000RelationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000Cases {
  public $DisplayName; // string
  public $CaseID; // Field
  public $Subject; // Field
  public $ClassID; // Field
  public $Contract; // Field
  public $Severity; // Field
  public $Status; // Field
  public $Reason; // Field
  public $DateReported; // Field
  public $InitResponse; // Field
  public $Estimation; // Field
  public $ClosingDate; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000CasesServiceCommands
}

class CR303000CasesServiceCommands {
  public $KeyCaseID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Contracts {
  public $DisplayName; // string
  public $ContractID; // Field
  public $BusinessAccount; // Field
  public $BusinessAccountName; // Field
  public $Description; // Field
  public $Status; // Field
  public $ExpirationDate; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000ContractsServiceCommands
}

class CR303000ContractsServiceCommands {
  public $KeyContractID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Orders {
  public $DisplayName; // string
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $Description; // Field
  public $CustomerOrder; // Field
  public $Status; // Field
  public $RequestedOn; // Field
  public $SchedShipment; // Field
  public $ShipVia; // Field
  public $ShippingZone; // Field
  public $OrderWeight; // Field
  public $OrderVolume; // Field
  public $OrderedQty; // Field
  public $Currency; // Field
  public $OrderTotal; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR303000OrdersServiceCommands
}

class CR303000OrdersServiceCommands {
  public $KeyOrderType; // Key
  public $KeyOrderNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000Campaigns {
  public $DisplayName; // string
  public $CampaignID; // Field
  public $CampaignName; // Field
  public $Status; // Field
  public $ServiceCommands; // CR303000CampaignsServiceCommands
}

class CR303000CampaignsServiceCommands {
  public $KeyCampaignID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000MarketingLists {
  public $DisplayName; // string
  public $MarketingListIDMarketingListID; // Field
  public $Name; // Field
  public $Activated; // Field
  public $Format; // Field
  public $MarketingListIDCRMarketingListMailListCode; // Field
  public $ServiceCommands; // CR303000MarketingListsServiceCommands
}

class CR303000MarketingListsServiceCommands {
  public $KeyMarketingListIDMarketingListID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000Duplicates {
  public $DisplayName; // string
  public $Type; // Field
  public $LastModifiedDate; // Field
  public $DisplayName_; // Field
  public $BusinessAccount; // Field
  public $BusinessAccountType; // Field
  public $AccountName; // Field
  public $Email; // Field
  public $ServiceCommands; // CR303000DuplicatesServiceCommands
}

class CR303000DuplicatesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000PleaseResolveTheConflictsBAccountID {
  public $DisplayName; // string
  public $BAccountID; // Field
  public $ServiceCommands; // CR303000PleaseResolveTheConflictsBAccountIDServiceCommands
}

class CR303000PleaseResolveTheConflictsBAccountIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000PleaseResolveTheConflicts {
  public $DisplayName; // string
  public $NameDisplayName; // Field
  public $Value; // Field
  public $ServiceCommands; // CR303000PleaseResolveTheConflictsServiceCommands
}

class CR303000PleaseResolveTheConflictsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR303000SpecifyNewID {
  public $DisplayName; // string
  public $BusinessAccountID; // Field
  public $ServiceCommands; // CR303000SpecifyNewIDServiceCommands
}

class CR303000SpecifyNewIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR303000PrimaryKey {
  public $BusinessAccount; // Value
}

class CR303000Clear {
}

class CR303000ClearResponse {
}

class CR303000GetProcessStatus {
}

class CR303000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class CR303000GetSchema {
}

class CR303000GetSchemaResponse {
  public $GetSchemaResult; // CR303000Content
}

class CR303000SetSchema {
  public $schema; // CR303000Content
}

class CR303000SetSchemaResponse {
}

class CR303000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class CR303000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class CR303000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class CR303000ImportResponse {
  public $ImportResult; // CR303000ArrayOfImportResult
}

class CR303000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // CR303000PrimaryKey
}

class CR303000ArrayOfImportResult {
  public $ImportResult; // CR303000ImportResult
}

class CR303000Submit {
  public $commands; // ArrayOfCommand
}

class CR303000ArrayOfContent {
  public $Content; // CR303000Content
}

class CR303000SubmitResponse {
  public $SubmitResult; // CR303000ArrayOfContent
}

class CR304000Content {
  public $Actions; // CR304000Actions
  public $OpportunitySummary; // CR304000OpportunitySummary
  public $Details; // CR304000Details
  public $OpportunitySummaryRateSelection; // CR304000OpportunitySummaryRateSelection
  public $OpportunitySummaryRateSelectionCurrencyUnitEquivalents; // CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalents
  public $DetailsProbability; // CR304000DetailsProbability
  public $Attributes; // CR304000Attributes
  public $Activities; // CR304000Activities
  public $Relations; // CR304000Relations
  public $Products; // CR304000Products
  public $TaxDetails; // CR304000TaxDetails
  public $CreateSalesOrder; // CR304000CreateSalesOrder
  public $NewAccountServicesSettings; // CR304000NewAccountServicesSettings
}

class CR304000Actions {
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $CancelCloseToList; // Action
  public $SaveCloseToList; // Action
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $Delete; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $CreateAccountAction; // Action
  public $CreateSalesOrderAction; // Action
  public $CreateInvoiceAction; // Action
  public $ViewInvoiceInquiry; // Action
  public $ViewSalesOrderInquiry; // Action
  public $CreateInvoice; // Action
  public $CreateAccount; // Action
  public $ViewInvoice; // Action
  public $CreateSalesOrder; // Action
  public $ViewSalesOrder; // Action
  public $UpdateClosingDate; // Action
  public $RelationsEntityDetails; // Action
  public $RelationsContactDetails; // Action
  public $ResetListNavigation; // Action
  public $ShowImportGraphErrors; // Action
}

class CR304000OpportunitySummary {
  public $DisplayName; // string
  public $OpportunityID; // Field
  public $Status; // Field
  public $Reason; // Field
  public $Stage; // Field
  public $Source; // Field
  public $Subject; // Field
  public $ClassID; // Field
  public $BusinessAccount; // Field
  public $Location; // Field
  public $Contact; // Field
  public $ContactDisplayName; // Field
  public $Currency; // Field
  public $CuryViewState; // Field
  public $ManualAmount; // Field
  public $Amount; // Field
  public $Discount; // Field
  public $Total; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR304000OpportunitySummaryServiceCommands
}

class CR304000OpportunitySummaryServiceCommands {
  public $KeyOpportunityID; // Key
  public $EveryOpportunityID; // EveryValue
  public $FilterBusinessAccountName; // Field
  public $FilterDisplayName; // Field
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000Details {
  public $DisplayName; // string
  public $Branch; // Field
  public $Project; // Field
  public $Workgroup; // Field
  public $WorkgroupDescription; // Field
  public $Owner; // Field
  public $OwnerEmployeeName; // Field
  public $ParentAccount; // Field
  public $Campaign; // Field
  public $TaxZone; // Field
  public $Estimation; // Field
  public $WgtTotal; // Field
  public $ConvertedLead; // Field
  public $ConvertedLeadDisplayName; // Field
  public $Details; // Field
  public $ServiceCommands; // CR304000DetailsServiceCommands
}

class CR304000DetailsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000OpportunitySummaryRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // CR304000OpportunitySummaryRateSelectionServiceCommands
}

class CR304000OpportunitySummaryRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000DetailsProbability {
  public $DisplayName; // string
  public $Probability; // Field
  public $ServiceCommands; // CR304000DetailsProbabilityServiceCommands
}

class CR304000DetailsProbabilityServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000Attributes {
  public $DisplayName; // string
  public $Required; // Field
  public $Attribute; // Field
  public $Value; // Field
  public $ServiceCommands; // CR304000AttributesServiceCommands
}

class CR304000AttributesServiceCommands {
  public $KeyAttribute; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR304000Activities {
  public $DisplayName; // string
  public $IsCompleteIcon; // Field
  public $PriorityIcon; // Field
  public $ReminderIcon; // Field
  public $ClassIcon; // Field
  public $Type; // Field
  public $Summary; // Field
  public $Status; // Field
  public $MailStatus; // Field
  public $Released; // Field
  public $StartDate; // Field
  public $CreatedAt; // Field
  public $TimeSpent; // Field
  public $CreatedBy; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $ProjectTask; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR304000ActivitiesServiceCommands
}

class CR304000ActivitiesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000Relations {
  public $DisplayName; // string
  public $Role; // Field
  public $AccountEmployee; // Field
  public $Name; // Field
  public $Contact; // Field
  public $ContactDisplayName; // Field
  public $Email; // Field
  public $AddToCC; // Field
  public $ServiceCommands; // CR304000RelationsServiceCommands
}

class CR304000RelationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR304000Products {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $FreeItem; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $UnitPrice; // Field
  public $ExtPrice; // Field
  public $Discount; // Field
  public $DiscountAmount; // Field
  public $ManualDiscount; // Field
  public $Amount; // Field
  public $ProjectTask; // Field
  public $TaxCategory; // Field
  public $TransactionDescription; // Field
  public $Warehouse; // Field
  public $NoteText; // Field
  public $ServiceCommands; // CR304000ProductsServiceCommands
}

class CR304000ProductsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000TaxDetails {
  public $DisplayName; // string
  public $TaxID; // Field
  public $TaxRate; // Field
  public $TaxableAmount; // Field
  public $TaxAmount; // Field
  public $TaxType; // Field
  public $PendingVAT; // Field
  public $ReverseVAT; // Field
  public $IncludeInVATExemptTotal; // Field
  public $StatisticalVAT; // Field
  public $ServiceCommands; // CR304000TaxDetailsServiceCommands
}

class CR304000TaxDetailsServiceCommands {
  public $KeyTaxID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class CR304000CreateSalesOrder {
  public $DisplayName; // string
  public $OrderType; // Field
  public $RecalcDiscounts; // Field
  public $ServiceCommands; // CR304000CreateSalesOrderServiceCommands
}

class CR304000CreateSalesOrderServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000NewAccountServicesSettings {
  public $DisplayName; // string
  public $BAccountID; // Field
  public $AccountName; // Field
  public $AccountClass; // Field
  public $ServiceCommands; // CR304000NewAccountServicesSettingsServiceCommands
}

class CR304000NewAccountServicesSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class CR304000PrimaryKey {
  public $OpportunityID; // Value
}

class CR304000Clear {
}

class CR304000ClearResponse {
}

class CR304000GetProcessStatus {
}

class CR304000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class CR304000GetSchema {
}

class CR304000GetSchemaResponse {
  public $GetSchemaResult; // CR304000Content
}

class CR304000SetSchema {
  public $schema; // CR304000Content
}

class CR304000SetSchemaResponse {
}

class CR304000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class CR304000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class CR304000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class CR304000ImportResponse {
  public $ImportResult; // CR304000ArrayOfImportResult
}

class CR304000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // CR304000PrimaryKey
}

class CR304000ArrayOfImportResult {
  public $ImportResult; // CR304000ImportResult
}

class CR304000Submit {
  public $commands; // ArrayOfCommand
}

class CR304000ArrayOfContent {
  public $Content; // CR304000Content
}

class CR304000SubmitResponse {
  public $SubmitResult; // CR304000ArrayOfContent
}

class GL301000Content {
  public $Actions; // GL301000Actions
  public $BatchSummary; // GL301000BatchSummary
  public $BatchSummaryRateSelection; // GL301000BatchSummaryRateSelection
  public $BatchSummaryRateSelectionCurrencyUnitEquivalents; // GL301000BatchSummaryRateSelectionCurrencyUnitEquivalents
  public $TransactionDetails; // GL301000TransactionDetails
  public $BatchSummaryVoucherBatchNbr; // GL301000BatchSummaryVoucherBatchNbr
}

class GL301000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $BatchRegisterDetails; // Action
  public $GLEditDetails; // Action
  public $GLReversingBatches; // Action
  public $Release; // Action
  public $ReverseBatchAction; // Action
  public $CreateScheduleAction; // Action
  public $BatchRegisterDetailsReport; // Action
  public $GLEditDetailsReport; // Action
  public $GLReversingBatchesReport; // Action
  public $CreateSchedule; // Action
  public $ReverseBatch; // Action
  public $ViewDocument; // Action
  public $ShowImportGraphErrors; // Action
}

class GL301000BatchSummary {
  public $DisplayName; // string
  public $Module; // Field
  public $BatchNumber; // Field
  public $Status; // Field
  public $Hold; // Field
  public $TransactionDate; // Field
  public $PostPeriod; // Field
  public $Branch; // Field
  public $Ledger; // Field
  public $Currency; // Field
  public $CuryViewState; // Field
  public $Description; // Field
  public $AutoReversing; // Field
  public $ReversingEntry; // Field
  public $CreateTaxTrans; // Field
  public $OrigBatchNumber; // Field
  public $ReversingBatches; // Field
  public $DebitTotal; // Field
  public $CreditTotal; // Field
  public $ControlTotal; // Field
  public $SkipTaxAmountValidation; // Field
  public $NoteText; // Field
  public $ServiceCommands; // GL301000BatchSummaryServiceCommands
}

class GL301000BatchSummaryServiceCommands {
  public $KeyModule; // Key
  public $EveryModule; // EveryValue
  public $KeyBatchNumber; // Key
  public $EveryBatchNumber; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class GL301000BatchSummaryRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // GL301000BatchSummaryRateSelectionServiceCommands
}

class GL301000BatchSummaryRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class GL301000BatchSummaryRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // GL301000BatchSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class GL301000BatchSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class GL301000TransactionDetails {
  public $DisplayName; // string
  public $LineNbr; // Field
  public $Account; // Field
  public $Description; // Field
  public $Subaccount; // Field
  public $Project; // Field
  public $RefNumber; // Field
  public $TransactionDate; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $DebitAmount; // Field
  public $CreditAmount; // Field
  public $TransactionDescription; // Field
  public $InventoryID; // Field
  public $Ledger; // Field
  public $CustomerVendor; // Field
  public $NonBillable; // Field
  public $NoteText; // Field
  public $ServiceCommands; // GL301000TransactionDetailsServiceCommands
}

class GL301000TransactionDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class GL301000BatchSummaryVoucherBatchNbr {
  public $DisplayName; // string
  public $VoucherBatchNbr; // Field
  public $WorkbookID; // Field
  public $ServiceCommands; // GL301000BatchSummaryVoucherBatchNbrServiceCommands
}

class GL301000BatchSummaryVoucherBatchNbrServiceCommands {
  public $KeyWorkbookID; // Key
  public $KeyVoucherBatchNbr; // Key
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class GL301000PrimaryKey {
  public $Module; // Value
  public $BatchNumber; // Value
}

class GL301000Clear {
}

class GL301000ClearResponse {
}

class GL301000GetProcessStatus {
}

class GL301000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class GL301000GetSchema {
}

class GL301000GetSchemaResponse {
  public $GetSchemaResult; // GL301000Content
}

class GL301000SetSchema {
  public $schema; // GL301000Content
}

class GL301000SetSchemaResponse {
}

class GL301000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class GL301000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class GL301000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class GL301000ImportResponse {
  public $ImportResult; // GL301000ArrayOfImportResult
}

class GL301000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // GL301000PrimaryKey
}

class GL301000ArrayOfImportResult {
  public $ImportResult; // GL301000ImportResult
}

class GL301000Submit {
  public $commands; // ArrayOfCommand
}

class GL301000ArrayOfContent {
  public $Content; // GL301000Content
}

class GL301000SubmitResponse {
  public $SubmitResult; // GL301000ArrayOfContent
}

class IN202500Content {
  public $Actions; // IN202500Actions
  public $StockItemSummary; // IN202500StockItemSummary
  public $GeneralSettingsItemDefaults; // IN202500GeneralSettingsItemDefaults
  public $GeneralSettingsWarehouseDefaults; // IN202500GeneralSettingsWarehouseDefaults
  public $GeneralSettingsUnitOfMeasureBaseUnit; // IN202500GeneralSettingsUnitOfMeasureBaseUnit
  public $GeneralSettingsPhysicalInventory; // IN202500GeneralSettingsPhysicalInventory
  public $PriceCostInfoPriceManagement; // IN202500PriceCostInfoPriceManagement
  public $PriceCostInfoStandardCost; // IN202500PriceCostInfoStandardCost
  public $Attributes; // IN202500Attributes
  public $PackagingDimensions; // IN202500PackagingDimensions
  public $PackagingAutomaticPackaging; // IN202500PackagingAutomaticPackaging
  public $GLAccounts; // IN202500GLAccounts
  public $Description; // IN202500Description
  public $DeferralSettingsRules; // IN202500DeferralSettingsRules
  public $Subitems; // IN202500Subitems
  public $PriceCostInfoCostStatistics; // IN202500PriceCostInfoCostStatistics
  public $GeneralSettingsUnitOfMeasure; // IN202500GeneralSettingsUnitOfMeasure
  public $WarehouseDetails; // IN202500WarehouseDetails
  public $CrossReference; // IN202500CrossReference
  public $ReplenishmentInfoReplenishmentParameters; // IN202500ReplenishmentInfoReplenishmentParameters
  public $ReplenishmentInfoSubitemReplenishmentParameters; // IN202500ReplenishmentInfoSubitemReplenishmentParameters
  public $VendorDetails; // IN202500VendorDetails
  public $PackagingAutomaticPackagingBoxes; // IN202500PackagingAutomaticPackagingBoxes
  public $AttributesAttributes; // IN202500AttributesAttributes
  public $AttributesSalesCategories; // IN202500AttributesSalesCategories
  public $RestrictionGroups; // IN202500RestrictionGroups
  public $SpecifyNewID; // IN202500SpecifyNewID
}

class IN202500Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $CopyDocumentEdit; // Action
  public $PasteDocumentEdit; // Action
  public $SaveTemplateEdit; // Action
  public $Delete; // Action
  public $First; // Action
  public $Prev; // Action
  public $Next; // Action
  public $Last; // Action
  public $ChangeID; // Action
  public $UpdateCostAction; // Action
  public $ViewRestrictionGroupsAction; // Action
  public $SummaryInquiry; // Action
  public $AllocationDetailsInquiry; // Action
  public $TransactionSummaryInquiry; // Action
  public $TransactionDetailsInquiry; // Action
  public $TransactionHistoryInquiry; // Action
  public $SalesPricesInquiry; // Action
  public $VendorPricesInquiry; // Action
  public $AddWarehouseDetail; // Action
  public $UpdateReplenishment; // Action
  public $GenerateSubitems; // Action
  public $GenerateLotSerialNumber; // Action
  public $ViewGroupDetails; // Action
  public $ShowImportGraphErrors; // Action
}

class IN202500StockItemSummary {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $ItemStatus; // Field
  public $Description; // Field
  public $ProductWorkgroup; // Field
  public $ProductManager; // Field
  public $NoteText; // Field
  public $ServiceCommands; // IN202500StockItemSummaryServiceCommands
}

class IN202500StockItemSummaryServiceCommands {
  public $KeyInventoryID; // Key
  public $EveryInventoryID; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500GeneralSettingsItemDefaults {
  public $DisplayName; // string
  public $ItemClass; // Field
  public $Type; // Field
  public $IsAKit; // Field
  public $ValuationMethod; // Field
  public $TaxCategory; // Field
  public $PostingClass; // Field
  public $LotSerialClass; // Field
  public $AutoIncrementalValue; // Field
  public $ServiceCommands; // IN202500GeneralSettingsItemDefaultsServiceCommands
}

class IN202500GeneralSettingsItemDefaultsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500GeneralSettingsWarehouseDefaults {
  public $DisplayName; // string
  public $DefaultWarehouse; // Field
  public $DefaultIssueFrom; // Field
  public $DefaultReceiptTo; // Field
  public $DefaultSubitem; // Field
  public $UseOnEntry; // Field
  public $ServiceCommands; // IN202500GeneralSettingsWarehouseDefaultsServiceCommands
}

class IN202500GeneralSettingsWarehouseDefaultsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500GeneralSettingsUnitOfMeasureBaseUnit {
  public $DisplayName; // string
  public $BaseUnit; // Field
  public $SalesUnit; // Field
  public $PurchaseUnit; // Field
  public $ServiceCommands; // IN202500GeneralSettingsUnitOfMeasureBaseUnitServiceCommands
}

class IN202500GeneralSettingsUnitOfMeasureBaseUnitServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500GeneralSettingsPhysicalInventory {
  public $DisplayName; // string
  public $PICycle; // Field
  public $ABCCode; // Field
  public $FixedABCCode; // Field
  public $MovementClass; // Field
  public $FixedMovementClass; // Field
  public $ServiceCommands; // IN202500GeneralSettingsPhysicalInventoryServiceCommands
}

class IN202500GeneralSettingsPhysicalInventoryServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500PriceCostInfoPriceManagement {
  public $DisplayName; // string
  public $PriceClass; // Field
  public $PriceWorkgroup; // Field
  public $PriceManager; // Field
  public $SubjectToCommission; // Field
  public $MinMarkup; // Field
  public $Markup; // Field
  public $MSRP; // Field
  public $DefaultPrice; // Field
  public $ServiceCommands; // IN202500PriceCostInfoPriceManagementServiceCommands
}

class IN202500PriceCostInfoPriceManagementServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500PriceCostInfoStandardCost {
  public $DisplayName; // string
  public $PendingCost; // Field
  public $PendingCostDate; // Field
  public $CurrentCost; // Field
  public $EffectiveDate; // Field
  public $LastCost; // Field
  public $ServiceCommands; // IN202500PriceCostInfoStandardCostServiceCommands
}

class IN202500PriceCostInfoStandardCostServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500Attributes {
  public $DisplayName; // string
  public $ImageUrl; // Field
  public $ServiceCommands; // IN202500AttributesServiceCommands
}

class IN202500AttributesServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500PackagingDimensions {
  public $DisplayName; // string
  public $Weight; // Field
  public $WeightUOM; // Field
  public $Volume; // Field
  public $VolumeUOM; // Field
  public $ServiceCommands; // IN202500PackagingDimensionsServiceCommands
}

class IN202500PackagingDimensionsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500PackagingAutomaticPackaging {
  public $DisplayName; // string
  public $PackagingOption; // Field
  public $PackSeparately; // Field
  public $ServiceCommands; // IN202500PackagingAutomaticPackagingServiceCommands
}

class IN202500PackagingAutomaticPackagingServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500GLAccounts {
  public $DisplayName; // string
  public $InventoryAccount; // Field
  public $InventorySub; // Field
  public $ReasonCodeSub; // Field
  public $SalesAccount; // Field
  public $SalesSub; // Field
  public $COGSAccount; // Field
  public $COGSSub; // Field
  public $StandardCostVarianceAccount; // Field
  public $StandardCostVarianceSub; // Field
  public $StandardCostRevaluationAccount; // Field
  public $StandardCostRevaluationSub; // Field
  public $POAccrualAccount; // Field
  public $POAccrualSub; // Field
  public $PurchasePriceVarianceAccount; // Field
  public $PurchasePriceVarianceSub; // Field
  public $LandedCostVarianceAccount; // Field
  public $LandedCostVarianceSub; // Field
  public $DiscountAccount; // Field
  public $DiscountSub; // Field
  public $DeferralAccount; // Field
  public $DeferralSub; // Field
  public $ServiceCommands; // IN202500GLAccountsServiceCommands
}

class IN202500GLAccountsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500Description {
  public $DisplayName; // string
  public $Content; // Field
  public $ServiceCommands; // IN202500DescriptionServiceCommands
}

class IN202500DescriptionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500DeferralSettingsRules {
  public $DisplayName; // string
  public $DeferralCode; // Field
  public $DefaultTerm; // Field
  public $DefaultTermUOM; // Field
  public $UseComponentSubaccounts; // Field
  public $TotalPercentage; // Field
  public $ServiceCommands; // IN202500DeferralSettingsRulesServiceCommands
}

class IN202500DeferralSettingsRulesServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500Subitems {
  public $DisplayName; // string
  public $SegmentID; // Field
  public $Value; // Field
  public $ServiceCommands; // IN202500SubitemsServiceCommands
}

class IN202500SubitemsServiceCommands {
  public $KeySegmentID; // Key
  public $KeyValue; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500PriceCostInfoCostStatistics {
  public $DisplayName; // string
  public $LastCost; // Field
  public $AverageCost; // Field
  public $MinCost; // Field
  public $MaxCost; // Field
  public $ServiceCommands; // IN202500PriceCostInfoCostStatisticsServiceCommands
}

class IN202500PriceCostInfoCostStatisticsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500GeneralSettingsUnitOfMeasure {
  public $DisplayName; // string
  public $FromUnit; // Field
  public $MultiplyDivide; // Field
  public $ConversionFactor; // Field
  public $ToUnitSampleToUnit; // Field
  public $ServiceCommands; // IN202500GeneralSettingsUnitOfMeasureServiceCommands
}

class IN202500GeneralSettingsUnitOfMeasureServiceCommands {
  public $KeyFromUnit; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500WarehouseDetails {
  public $DisplayName; // string
  public $Default; // Field
  public $Warehouse; // Field
  public $WarehouseWarehouseID; // Field
  public $DefaultReceiptTo; // Field
  public $DefaultIssueFrom; // Field
  public $Status; // Field
  public $InventoryAccount; // Field
  public $InventorySub; // Field
  public $ProductWorkgroup; // Field
  public $ProductManager; // Field
  public $OverrideStdCost; // Field
  public $PriceOverride; // Field
  public $QtyOnHand; // Field
  public $OverridePreferredVendor; // Field
  public $PreferredVendor; // Field
  public $OverrideReplenishmentSettings; // Field
  public $Seasonality; // Field
  public $ReplenishmentSource; // Field
  public $ReplenishmentWarehouse; // Field
  public $Override; // Field
  public $ServiceLevel; // Field
  public $LastForecastDate; // Field
  public $DailyDemandForecast; // Field
  public $DailyDemandForecastErrorSTDEV; // Field
  public $NoteText; // Field
  public $ServiceCommands; // IN202500WarehouseDetailsServiceCommands
}

class IN202500WarehouseDetailsServiceCommands {
  public $KeyWarehouse; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500CrossReference {
  public $DisplayName; // string
  public $AlternateType; // Field
  public $VendorCustomer; // Field
  public $AlternateID; // Field
  public $Description; // Field
  public $ServiceCommands; // IN202500CrossReferenceServiceCommands
}

class IN202500CrossReferenceServiceCommands {
  public $KeyAlternateType; // Key
  public $KeyVendorCustomer; // Key
  public $KeyAlternateID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500ReplenishmentInfoReplenishmentParameters {
  public $DisplayName; // string
  public $ReplClass; // Field
  public $Seasonality; // Field
  public $Source; // Field
  public $Method; // Field
  public $ReplenishmentWarehouse; // Field
  public $MaxShelfLifeDays; // Field
  public $LaunchDate; // Field
  public $TerminationDate; // Field
  public $ServiceLevel; // Field
  public $SafetyStock; // Field
  public $ReorderPoint; // Field
  public $MaxQty; // Field
  public $TransferERQ; // Field
  public $DemandForecastModel; // Field
  public $ForecastPeriodType; // Field
  public $PeriodsToAnalyze; // Field
  public $ServiceCommands; // IN202500ReplenishmentInfoReplenishmentParametersServiceCommands
}

class IN202500ReplenishmentInfoReplenishmentParametersServiceCommands {
  public $KeyReplClass; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500ReplenishmentInfoSubitemReplenishmentParameters {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $ReplenishmentClassID; // Field
  public $SafetyStock; // Field
  public $ReorderPoint; // Field
  public $MaxQty; // Field
  public $TransferERQ; // Field
  public $Status; // Field
  public $ServiceCommands; // IN202500ReplenishmentInfoSubitemReplenishmentParametersServiceCommands
}

class IN202500ReplenishmentInfoSubitemReplenishmentParametersServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500VendorDetails {
  public $DisplayName; // string
  public $Active; // Field
  public $Default; // Field
  public $VendorID; // Field
  public $VendorName; // Field
  public $Warehouse; // Field
  public $PurchaseUnit; // Field
  public $VendorInventoryID; // Field
  public $LeadTimeDays; // Field
  public $Override; // Field
  public $AddLeadTimeDays; // Field
  public $MinOrderFreqDays; // Field
  public $MinOrderQty; // Field
  public $MaxOrderQty; // Field
  public $LotSize; // Field
  public $EOQ; // Field
  public $CurrencyID; // Field
  public $LastVendorPrice; // Field
  public $ServiceCommands; // IN202500VendorDetailsServiceCommands
}

class IN202500VendorDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500PackagingAutomaticPackagingBoxes {
  public $DisplayName; // string
  public $BoxID; // Field
  public $Description; // Field
  public $UOM; // Field
  public $Qty; // Field
  public $MaxWeight; // Field
  public $MaxVolume; // Field
  public $MaxQty; // Field
  public $ServiceCommands; // IN202500PackagingAutomaticPackagingBoxesServiceCommands
}

class IN202500PackagingAutomaticPackagingBoxesServiceCommands {
  public $KeyBoxID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500AttributesAttributes {
  public $DisplayName; // string
  public $Attribute; // Field
  public $Required; // Field
  public $Value; // Field
  public $ServiceCommands; // IN202500AttributesAttributesServiceCommands
}

class IN202500AttributesAttributesServiceCommands {
  public $KeyAttribute; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500AttributesSalesCategories {
  public $DisplayName; // string
  public $CategoryID; // Field
  public $ServiceCommands; // IN202500AttributesSalesCategoriesServiceCommands
}

class IN202500AttributesSalesCategoriesServiceCommands {
  public $KeyCategoryID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500RestrictionGroups {
  public $DisplayName; // string
  public $Included; // Field
  public $GroupName; // Field
  public $SpecificType; // Field
  public $Description; // Field
  public $Active; // Field
  public $GroupType; // Field
  public $ServiceCommands; // IN202500RestrictionGroupsServiceCommands
}

class IN202500RestrictionGroupsServiceCommands {
  public $KeyGroupName; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN202500SpecifyNewID {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $ServiceCommands; // IN202500SpecifyNewIDServiceCommands
}

class IN202500SpecifyNewIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN202500PrimaryKey {
  public $InventoryID; // Value
}

class IN202500Clear {
}

class IN202500ClearResponse {
}

class IN202500GetProcessStatus {
}

class IN202500GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class IN202500GetSchema {
}

class IN202500GetSchemaResponse {
  public $GetSchemaResult; // IN202500Content
}

class IN202500SetSchema {
  public $schema; // IN202500Content
}

class IN202500SetSchemaResponse {
}

class IN202500Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class IN202500ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class IN202500Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class IN202500ImportResponse {
  public $ImportResult; // IN202500ArrayOfImportResult
}

class IN202500ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // IN202500PrimaryKey
}

class IN202500ArrayOfImportResult {
  public $ImportResult; // IN202500ImportResult
}

class IN202500Submit {
  public $commands; // ArrayOfCommand
}

class IN202500ArrayOfContent {
  public $Content; // IN202500Content
}

class IN202500SubmitResponse {
  public $SubmitResult; // IN202500ArrayOfContent
}

class IN204000Content {
  public $Actions; // IN204000Actions
  public $WarehouseSummary; // IN204000WarehouseSummary
  public $LocationTable; // IN204000LocationTable
  public $GLAccounts; // IN204000GLAccounts
  public $LocationTableLocationTable; // IN204000LocationTableLocationTable
  public $AddressInformationAddressAddress; // IN204000AddressInformationAddressAddress
  public $AddressInformationContact; // IN204000AddressInformationContact
  public $SpecifyNewID; // IN204000SpecifyNewID
}

class IN204000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $ViewRestrictionGroups; // Action
  public $INLocationLabels; // Action
  public $ValidateAddresses; // Action
  public $ViewRestrictionGroupsAction; // Action
  public $ValidateAddressesAction; // Action
  public $INLocationLabelsReport; // Action
  public $ChangeID; // Action
  public $ViewOnMap; // Action
  public $ShowImportGraphErrors; // Action
}

class IN204000WarehouseSummary {
  public $DisplayName; // string
  public $WarehouseID; // Field
  public $Branch; // Field
  public $ReplenishmentClass; // Field
  public $Active; // Field
  public $FreezeInventoryWhenPICountIsInDataEntryState; // Field
  public $Description; // Field
  public $LocationEntry; // Field
  public $AvgDefaultReturnsCost; // Field
  public $FIFODefaultReturnsCost; // Field
  public $NoteText; // Field
  public $ServiceCommands; // IN204000WarehouseSummaryServiceCommands
}

class IN204000WarehouseSummaryServiceCommands {
  public $KeyWarehouseID; // Key
  public $EveryWarehouseID; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000LocationTable {
  public $DisplayName; // string
  public $ReceivingLocation; // Field
  public $ShippingLocation; // Field
  public $RMALocation; // Field
  public $DropShipLocation; // Field
  public $ServiceCommands; // IN204000LocationTableServiceCommands
}

class IN204000LocationTableServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000GLAccounts {
  public $DisplayName; // string
  public $OverrideInventoryAccountSub; // Field
  public $InventoryAccount; // Field
  public $InventorySub; // Field
  public $ReasonCodeSub; // Field
  public $SalesAccount; // Field
  public $SalesSub; // Field
  public $COGSExpenseAccount; // Field
  public $COGSExpenseSub; // Field
  public $StandardCostVarianceAccount; // Field
  public $StandardCostVarianceSub; // Field
  public $StandardCostRevaluationAccount; // Field
  public $StandardCostRevaluationSub; // Field
  public $POAccrualAccount; // Field
  public $POAccrualSub; // Field
  public $PurchasePriceVarianceAccount; // Field
  public $PurchasePriceVarianceSub; // Field
  public $DiscountAccount; // Field
  public $DiscountSub; // Field
  public $MiscChargeAccount; // Field
  public $MiscChargeSub; // Field
  public $FreightChargeAccount; // Field
  public $FreightChargeSub; // Field
  public $LandedCostVarianceAccount; // Field
  public $LandedCostVarianceSub; // Field
  public $ServiceCommands; // IN204000GLAccountsServiceCommands
}

class IN204000GLAccountsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000LocationTableLocationTable {
  public $DisplayName; // string
  public $LocationID; // Field
  public $Description; // Field
  public $Active; // Field
  public $IncludeInQtyAvailable; // Field
  public $CostSeparately; // Field
  public $SalesAllowed; // Field
  public $ReceiptsAllowed; // Field
  public $TransfersAllowed; // Field
  public $AssemblyAllowed; // Field
  public $PickPriority; // Field
  public $PrimaryItemValidation; // Field
  public $PrimaryItem; // Field
  public $PrimaryItemClass; // Field
  public $ProjectTask; // Field
  public $NoteText; // Field
  public $ServiceCommands; // IN204000LocationTableLocationTableServiceCommands
}

class IN204000LocationTableLocationTableServiceCommands {
  public $KeyLocationID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000AddressInformationAddressAddress {
  public $DisplayName; // string
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // IN204000AddressInformationAddressAddressServiceCommands
}

class IN204000AddressInformationAddressAddressServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000AddressInformationContact {
  public $DisplayName; // string
  public $CompanyName; // Field
  public $Attention; // Field
  public $Email; // Field
  public $Web; // Field
  public $Phone1; // Field
  public $Phone2; // Field
  public $Fax; // Field
  public $ServiceCommands; // IN204000AddressInformationContactServiceCommands
}

class IN204000AddressInformationContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000SpecifyNewID {
  public $DisplayName; // string
  public $WarehouseID; // Field
  public $ServiceCommands; // IN204000SpecifyNewIDServiceCommands
}

class IN204000SpecifyNewIDServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN204000PrimaryKey {
  public $WarehouseID; // Value
}

class IN204000Clear {
}

class IN204000ClearResponse {
}

class IN204000GetProcessStatus {
}

class IN204000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class IN204000GetSchema {
}

class IN204000GetSchemaResponse {
  public $GetSchemaResult; // IN204000Content
}

class IN204000SetSchema {
  public $schema; // IN204000Content
}

class IN204000SetSchemaResponse {
}

class IN204000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class IN204000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class IN204000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class IN204000ImportResponse {
  public $ImportResult; // IN204000ArrayOfImportResult
}

class IN204000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // IN204000PrimaryKey
}

class IN204000ArrayOfImportResult {
  public $ImportResult; // IN204000ImportResult
}

class IN204000Submit {
  public $commands; // ArrayOfCommand
}

class IN204000ArrayOfContent {
  public $Content; // IN204000Content
}

class IN204000SubmitResponse {
  public $SubmitResult; // IN204000ArrayOfContent
}

class IN304000Content {
  public $Actions; // IN304000Actions
  public $DocumentSummary; // IN304000DocumentSummary
  public $FinancialDetails; // IN304000FinancialDetails
  public $TransactionDetails; // IN304000TransactionDetails
  public $Allocations; // IN304000Allocations
  public $InventoryLookupInventory; // IN304000InventoryLookupInventory
  public $InventoryLookup; // IN304000InventoryLookup
  public $AllocationsUnassignedQty; // IN304000AllocationsUnassignedQty
}

class IN304000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $LSINTranGenerateLotSerial; // Action
  public $LSINTranBinLotSerial; // Action
  public $ViewBatch; // Action
  public $Release; // Action
  public $INEditReport; // Action
  public $INRegisterDetailsReport; // Action
  public $INEdit; // Action
  public $INRegisterDetails; // Action
  public $InventorySummary; // Action
  public $AddInvBySite; // Action
  public $AddInvSelBySite; // Action
  public $ShowImportGraphErrors; // Action
}

class IN304000DocumentSummary {
  public $DisplayName; // string
  public $ReferenceNbr; // Field
  public $Status; // Field
  public $Hold; // Field
  public $TransferType; // Field
  public $Date; // Field
  public $PostPeriod; // Field
  public $WarehouseID; // Field
  public $ToWarehouseID; // Field
  public $ExternalRef; // Field
  public $Description; // Field
  public $ControlQty; // Field
  public $TotalQty; // Field
  public $NoteText; // Field
  public $ServiceCommands; // IN304000DocumentSummaryServiceCommands
}

class IN304000DocumentSummaryServiceCommands {
  public $KeyReferenceNbr; // Key
  public $EveryReferenceNbr; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN304000FinancialDetails {
  public $DisplayName; // string
  public $BatchNbr; // Field
  public $Branch; // Field
  public $ServiceCommands; // IN304000FinancialDetailsServiceCommands
}

class IN304000FinancialDetailsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN304000TransactionDetails {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $Location; // Field
  public $ToLocationID; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $LotSerialNbr; // Field
  public $ExpirationDate; // Field
  public $ReasonCode; // Field
  public $Description; // Field
  public $NoteText; // Field
  public $ServiceCommands; // IN304000TransactionDetailsServiceCommands
}

class IN304000TransactionDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN304000Allocations {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $Location; // Field
  public $LotSerialNbr; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $ServiceCommands; // IN304000AllocationsServiceCommands
}

class IN304000AllocationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN304000InventoryLookupInventory {
  public $DisplayName; // string
  public $Inventory; // Field
  public $BarCode; // Field
  public $LocationID; // Field
  public $ItemClassID; // Field
  public $SubItem; // Field
  public $ReceiptNbr; // Field
  public $OnlyAvailable; // Field
  public $ServiceCommands; // IN304000InventoryLookupInventoryServiceCommands
}

class IN304000InventoryLookupInventoryServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN304000InventoryLookup {
  public $DisplayName; // string
  public $Selected; // Field
  public $QtySelected; // Field
  public $Warehouse; // Field
  public $Location; // Field
  public $ItemClassID; // Field
  public $ItemClassDescription; // Field
  public $PriceClassID; // Field
  public $PriceClassDescription; // Field
  public $InventoryIDInventoryCD; // Field
  public $Description; // Field
  public $BaseUnit; // Field
  public $QtyAvailable; // Field
  public $QtyOnHand; // Field
  public $ServiceCommands; // IN304000InventoryLookupServiceCommands
}

class IN304000InventoryLookupServiceCommands {
  public $KeyWarehouse; // Key
  public $KeyLocation; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class IN304000AllocationsUnassignedQty {
  public $DisplayName; // string
  public $UnassignedQty; // Field
  public $QuantityToGenerate; // Field
  public $StartLotSerialNumber; // Field
  public $ServiceCommands; // IN304000AllocationsUnassignedQtyServiceCommands
}

class IN304000AllocationsUnassignedQtyServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class IN304000PrimaryKey {
  public $ReferenceNbr; // Value
}

class IN304000Clear {
}

class IN304000ClearResponse {
}

class IN304000GetProcessStatus {
}

class IN304000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class IN304000GetSchema {
}

class IN304000GetSchemaResponse {
  public $GetSchemaResult; // IN304000Content
}

class IN304000SetSchema {
  public $schema; // IN304000Content
}

class IN304000SetSchemaResponse {
}

class IN304000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class IN304000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class IN304000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class IN304000ImportResponse {
  public $ImportResult; // IN304000ArrayOfImportResult
}

class IN304000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // IN304000PrimaryKey
}

class IN304000ArrayOfImportResult {
  public $ImportResult; // IN304000ImportResult
}

class IN304000Submit {
  public $commands; // ArrayOfCommand
}

class IN304000ArrayOfContent {
  public $Content; // IN304000Content
}

class IN304000SubmitResponse {
  public $SubmitResult; // IN304000ArrayOfContent
}

class PO302000Content {
  public $Actions; // PO302000Actions
  public $DocumentSummary; // PO302000DocumentSummary
  public $FinancialDetailsBillingSettings; // PO302000FinancialDetailsBillingSettings
  public $FinancialDetailsTotals; // PO302000FinancialDetailsTotals
  public $FinancialDetailsAssignTo; // PO302000FinancialDetailsAssignTo
  public $DocumentDetails; // PO302000DocumentDetails
  public $Allocations; // PO302000Allocations
  public $DiscountDetails; // PO302000DiscountDetails
  public $TaxDetails; // PO302000TaxDetails
  public $LandedCosts; // PO302000LandedCosts
  public $DocumentSummaryRateSelection; // PO302000DocumentSummaryRateSelection
  public $DocumentSummaryRateSelectionCurrencyUnitEquivalents; // PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalents
  public $LandedCostsRateSelection; // PO302000LandedCostsRateSelection
  public $LandedCostsRateSelectionCurrencyUnitEquivalents; // PO302000LandedCostsRateSelectionCurrencyUnitEquivalents
  public $LandedCostsCurrencySelection; // PO302000LandedCostsCurrencySelection
  public $LandedCostsCurrencySelectionCurrencyUnitEquivalents; // PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalents
  public $RecalculatePricesAndDiscounts; // PO302000RecalculatePricesAndDiscounts
  public $AddPurchaseOrderLinePOSelection; // PO302000AddPurchaseOrderLinePOSelection
  public $AddPurchaseOrderPOSelection; // PO302000AddPurchaseOrderPOSelection
  public $AddTransferOrderPOSelection; // PO302000AddTransferOrderPOSelection
  public $AddTransferLineTransferSelection; // PO302000AddTransferLineTransferSelection
  public $AddReceiptLine; // PO302000AddReceiptLine
  public $AddTransferLine; // PO302000AddTransferLine
  public $AddTransferOrder; // PO302000AddTransferOrder
  public $AllocationsUnassignedQty; // PO302000AllocationsUnassignedQty
  public $AddPurchaseOrderLine; // PO302000AddPurchaseOrderLine
  public $AddPurchaseOrder; // PO302000AddPurchaseOrder
}

class PO302000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $LSPOReceiptLineGenerateLotSerial; // Action
  public $LSPOReceiptLineBinLotSerial; // Action
  public $Release; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $EmailPurchaseReceiptNotification; // Action
  public $AssignAction; // Action
  public $CreateAPDocumentAction; // Action
  public $EmailPurchaseReceiptAction; // Action
  public $RecalculateDiscountsActionAction; // Action
  public $ViewINDocumentInquiry; // Action
  public $ViewAPDocumentInquiry; // Action
  public $PrintPurchaseReceiptReport; // Action
  public $ViewPurchaseReceiptsBillingHistoryReport; // Action
  public $PurchaseReceiptAllocatedAndBackorderedReport; // Action
  public $Assign; // Action
  public $AddPOOrder; // Action
  public $AddPOOrder2; // Action
  public $AddTransfer; // Action
  public $AddTransfer2; // Action
  public $AddINTran; // Action
  public $AddINTran2; // Action
  public $AddPOOrderLine; // Action
  public $AddPOOrderLine2; // Action
  public $AddPOReceiptLine; // Action
  public $AddPOReceiptLine2; // Action
  public $ViewPOOrder; // Action
  public $ViewINDocument; // Action
  public $ViewAPDocument; // Action
  public $ViewLCINDocument; // Action
  public $ViewLCAPInvoice; // Action
  public $CreateAPDocument; // Action
  public $RecalculateDiscountsAction; // Action
  public $RecalcOk; // Action
  public $ShowImportGraphErrors; // Action
}

class PO302000DocumentSummary {
  public $DisplayName; // string
  public $Type; // Field
  public $ReceiptNbr; // Field
  public $Status; // Field
  public $Hold; // Field
  public $Date; // Field
  public $PostPeriod; // Field
  public $Vendor; // Field
  public $Location; // Field
  public $Warehouse; // Field
  public $Currency; // Field
  public $CuryViewState; // Field
  public $CreateBill; // Field
  public $VendorRef; // Field
  public $TotalQty; // Field
  public $ControlQty; // Field
  public $VATExemptTotal; // Field
  public $VATTaxableTotal; // Field
  public $DiscountTotal; // Field
  public $TotalAmt; // Field
  public $ControlAmt; // Field
  public $NoteText; // Field
  public $ServiceCommands; // PO302000DocumentSummaryServiceCommands
}

class PO302000DocumentSummaryServiceCommands {
  public $KeyType; // Key
  public $EveryType; // EveryValue
  public $KeyReceiptNbr; // Key
  public $EveryReceiptNbr; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000FinancialDetailsBillingSettings {
  public $DisplayName; // string
  public $Branch; // Field
  public $Terms; // Field
  public $BillDate; // Field
  public $DueDate; // Field
  public $CashDiscountDate; // Field
  public $CashDiscount; // Field
  public $VendorTaxZone; // Field
  public $ServiceCommands; // PO302000FinancialDetailsBillingSettingsServiceCommands
}

class PO302000FinancialDetailsBillingSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000FinancialDetailsTotals {
  public $DisplayName; // string
  public $UnbilledBalance; // Field
  public $UnbilledQuantity; // Field
  public $UnbilledLineTotal; // Field
  public $UnbilledTaxTotal; // Field
  public $ServiceCommands; // PO302000FinancialDetailsTotalsServiceCommands
}

class PO302000FinancialDetailsTotalsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000FinancialDetailsAssignTo {
  public $DisplayName; // string
  public $Workgroup; // Field
  public $Owner; // Field
  public $ServiceCommands; // PO302000FinancialDetailsAssignToServiceCommands
}

class PO302000FinancialDetailsAssignToServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000DocumentDetails {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $LineType; // Field
  public $Warehouse; // Field
  public $Location; // Field
  public $TransactionDescr; // Field
  public $UOM; // Field
  public $OrderedQty; // Field
  public $OpenQty; // Field
  public $ReceiptQty; // Field
  public $UnitCost; // Field
  public $ExtCost; // Field
  public $DiscountPercent; // Field
  public $DiscountAmount; // Field
  public $DiscUnitCost; // Field
  public $ManualDiscount; // Field
  public $DiscountCode; // Field
  public $DiscountSequence; // Field
  public $Amount; // Field
  public $TaxCategory; // Field
  public $Account; // Field
  public $Description; // Field
  public $Sub; // Field
  public $AccrualAccount; // Field
  public $AccrualSub; // Field
  public $Project; // Field
  public $ProjectTask; // Field
  public $ExpirationDate; // Field
  public $LineNbr; // Field
  public $LotSerialNbr; // Field
  public $POOrderType; // Field
  public $POOrderNbr; // Field
  public $POLineNbr; // Field
  public $TransferOrderType; // Field
  public $TransferOrderNbr; // Field
  public $TransferLineNbr; // Field
  public $CompletePOLine; // Field
  public $OpenPOLine; // Field
  public $ReasonCode; // Field
  public $NoteText; // Field
  public $ServiceCommands; // PO302000DocumentDetailsServiceCommands
}

class PO302000DocumentDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000Allocations {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $Location; // Field
  public $LotSerialNbr; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $ExpirationDate; // Field
  public $ServiceCommands; // PO302000AllocationsServiceCommands
}

class PO302000AllocationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class PO302000DiscountDetails {
  public $DisplayName; // string
  public $SkipDiscount; // Field
  public $DiscountCode; // Field
  public $SequenceID; // Field
  public $Type; // Field
  public $ManualDiscount; // Field
  public $DiscountableAmt; // Field
  public $DiscountableQty; // Field
  public $DiscountAmt; // Field
  public $Discount; // Field
  public $ServiceCommands; // PO302000DiscountDetailsServiceCommands
}

class PO302000DiscountDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class PO302000TaxDetails {
  public $DisplayName; // string
  public $TaxID; // Field
  public $TaxRate; // Field
  public $TaxableAmount; // Field
  public $TaxAmount; // Field
  public $TaxType; // Field
  public $PendingVAT; // Field
  public $ReverseVAT; // Field
  public $IncludeInVATExemptTotal; // Field
  public $StatisticalVAT; // Field
  public $ServiceCommands; // PO302000TaxDetailsServiceCommands
}

class PO302000TaxDetailsServiceCommands {
  public $KeyTaxID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class PO302000LandedCosts {
  public $DisplayName; // string
  public $LCTranID; // Field
  public $LandedCostCode; // Field
  public $POReceiptType; // Field
  public $Description; // Field
  public $APBillNbr; // Field
  public $Vendor; // Field
  public $APBillDate; // Field
  public $Currency; // Field
  public $Amount; // Field
  public $TaxCategory; // Field
  public $Terms; // Field
  public $InventoryID; // Field
  public $APDocType; // Field
  public $APRefNbr; // Field
  public $INDocType; // Field
  public $INRefNbr; // Field
  public $PostponeAPBillCreation; // Field
  public $ServiceCommands; // PO302000LandedCostsServiceCommands
}

class PO302000LandedCostsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class PO302000DocumentSummaryRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // PO302000DocumentSummaryRateSelectionServiceCommands
}

class PO302000DocumentSummaryRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000LandedCostsRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // PO302000LandedCostsRateSelectionServiceCommands
}

class PO302000LandedCostsRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000LandedCostsRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // PO302000LandedCostsRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class PO302000LandedCostsRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000LandedCostsCurrencySelection {
  public $DisplayName; // string
  public $CuryID; // Field
  public $CuryRateTypeID; // Field
  public $CuryEffDate; // Field
  public $CuryInfoID; // Field
  public $ServiceCommands; // PO302000LandedCostsCurrencySelectionServiceCommands
}

class PO302000LandedCostsCurrencySelectionServiceCommands {
  public $ParameterCurrencyInfoCuryInfoID; // Parameter
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $DisplayCuryID; // Field
  public $BaseCuryID; // Field
  public $SampleCuryRate; // Field
  public $SampleRecipRate; // Field
  public $ServiceCommands; // PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalentsServiceCommands
}

class PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalentsServiceCommands {
  public $ParameterCurrencyInfoCuryInfoID; // Parameter
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000RecalculatePricesAndDiscounts {
  public $DisplayName; // string
  public $RecalcTarget; // Field
  public $RecalcUnitPrices; // Field
  public $OverrideManualPrices; // Field
  public $RecalcDiscounts; // Field
  public $OverrideManualDiscounts; // Field
  public $ServiceCommands; // PO302000RecalculatePricesAndDiscountsServiceCommands
}

class PO302000RecalculatePricesAndDiscountsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddPurchaseOrderLinePOSelection {
  public $DisplayName; // string
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $ServiceCommands; // PO302000AddPurchaseOrderLinePOSelectionServiceCommands
}

class PO302000AddPurchaseOrderLinePOSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddPurchaseOrderPOSelection {
  public $DisplayName; // string
  public $OrderType; // Field
  public $AnyCurrency; // Field
  public $ShipToBAccountID; // Field
  public $ShipToLocationID; // Field
  public $ServiceCommands; // PO302000AddPurchaseOrderPOSelectionServiceCommands
}

class PO302000AddPurchaseOrderPOSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddTransferOrderPOSelection {
  public $DisplayName; // string
  public $ShipFromSiteID; // Field
  public $ServiceCommands; // PO302000AddTransferOrderPOSelectionServiceCommands
}

class PO302000AddTransferOrderPOSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddTransferLineTransferSelection {
  public $DisplayName; // string
  public $ShipFromSiteID; // Field
  public $SOOrderNbr; // Field
  public $ServiceCommands; // PO302000AddTransferLineTransferSelectionServiceCommands
}

class PO302000AddTransferLineTransferSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddReceiptLine {
  public $DisplayName; // string
  public $BarCode; // Field
  public $InventoryID; // Field
  public $SubItemID; // Field
  public $LotSerialNbr; // Field
  public $SiteID; // Field
  public $LocationID; // Field
  public $ExpireDate; // Field
  public $ReceiptQty; // Field
  public $UOM; // Field
  public $VendorID; // Field
  public $VendorLocationID; // Field
  public $POType; // Field
  public $PONbr; // Field
  public $POLineNbr; // Field
  public $ShipFromSiteID; // Field
  public $SOOrderType; // Field
  public $SOOrderNbr; // Field
  public $SOOrderLineNbr; // Field
  public $SOShipmentNbr; // Field
  public $CuryUnitCost; // Field
  public $CuryExtCost; // Field
  public $ByOne; // Field
  public $AutoAddLine; // Field
  public $Description; // Field
  public $ServiceCommands; // PO302000AddReceiptLineServiceCommands
}

class PO302000AddReceiptLineServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddTransferLine {
  public $DisplayName; // string
  public $Selected; // Field
  public $RefNbr; // Field
  public $InventoryID; // Field
  public $UOM; // Field
  public $Quantity; // Field
  public $Description; // Field
  public $LineNbr; // Field
  public $NoteText; // Field
  public $ServiceCommands; // PO302000AddTransferLineServiceCommands
}

class PO302000AddTransferLineServiceCommands {
  public $KeyRefNbr; // Key
  public $KeyLineNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddTransferOrder {
  public $DisplayName; // string
  public $Selected; // Field
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $ShipmentNbr; // Field
  public $FromWarehouse; // Field
  public $ToWarehouse; // Field
  public $Date; // Field
  public $Description; // Field
  public $NoteText; // Field
  public $ServiceCommands; // PO302000AddTransferOrderServiceCommands
}

class PO302000AddTransferOrderServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AllocationsUnassignedQty {
  public $DisplayName; // string
  public $UnassignedQty; // Field
  public $QuantityToGenerate; // Field
  public $StartLotSerialNumber; // Field
  public $ServiceCommands; // PO302000AllocationsUnassignedQtyServiceCommands
}

class PO302000AllocationsUnassignedQtyServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddPurchaseOrderLine {
  public $DisplayName; // string
  public $Selected; // Field
  public $OrderNbr; // Field
  public $Vendor; // Field
  public $LineType; // Field
  public $InventoryID; // Field
  public $UOM; // Field
  public $OrderQty; // Field
  public $QtyOnReceipts; // Field
  public $OpenQty; // Field
  public $LineDescription; // Field
  public $PromisedDate; // Field
  public $MinReceipt; // Field
  public $MaxReceipt; // Field
  public $ReceiptAction; // Field
  public $LineNbr; // Field
  public $NoteText; // Field
  public $ServiceCommands; // PO302000AddPurchaseOrderLineServiceCommands
}

class PO302000AddPurchaseOrderLineServiceCommands {
  public $KeyOrderNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000AddPurchaseOrder {
  public $DisplayName; // string
  public $Selected; // Field
  public $Type; // Field
  public $OrderNbr; // Field
  public $Date; // Field
  public $Status; // Field
  public $Currency; // Field
  public $OrderTotal; // Field
  public $VendorRef; // Field
  public $Terms; // Field
  public $Description; // Field
  public $ReceivedQty; // Field
  public $ReceivedAmt; // Field
  public $OpenQty; // Field
  public $OpenAmt; // Field
  public $NoteText; // Field
  public $ServiceCommands; // PO302000AddPurchaseOrderServiceCommands
}

class PO302000AddPurchaseOrderServiceCommands {
  public $KeyType; // Key
  public $KeyOrderNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class PO302000PrimaryKey {
  public $Type; // Value
  public $ReceiptNbr; // Value
}

class PO302000Clear {
}

class PO302000ClearResponse {
}

class PO302000GetProcessStatus {
}

class PO302000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class PO302000GetSchema {
}

class PO302000GetSchemaResponse {
  public $GetSchemaResult; // PO302000Content
}

class PO302000SetSchema {
  public $schema; // PO302000Content
}

class PO302000SetSchemaResponse {
}

class PO302000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class PO302000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class PO302000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class PO302000ImportResponse {
  public $ImportResult; // PO302000ArrayOfImportResult
}

class PO302000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // PO302000PrimaryKey
}

class PO302000ArrayOfImportResult {
  public $ImportResult; // PO302000ImportResult
}

class PO302000Submit {
  public $commands; // ArrayOfCommand
}

class PO302000ArrayOfContent {
  public $Content; // PO302000Content
}

class PO302000SubmitResponse {
  public $SubmitResult; // PO302000ArrayOfContent
}

class SO301000Content {
  public $Actions; // SO301000Actions
  public $OrderSummary; // SO301000OrderSummary
  public $CommissionsDefaultSalesperson; // SO301000CommissionsDefaultSalesperson
  public $FinancialSettingsFinancialInformation; // SO301000FinancialSettingsFinancialInformation
  public $PaymentSettings; // SO301000PaymentSettings
  public $ShippingSettingsShippingInformation; // SO301000ShippingSettingsShippingInformation
  public $Totals; // SO301000Totals
  public $ShopForRatesServicesSettings; // SO301000ShopForRatesServicesSettings
  public $ShopForRatesServicesSettingsIsManualPackage; // SO301000ShopForRatesServicesSettingsIsManualPackage
  public $DocumentDetails; // SO301000DocumentDetails
  public $PurchasingDetailsPurchasingSettings; // SO301000PurchasingDetailsPurchasingSettings
  public $TaxDetails; // SO301000TaxDetails
  public $Shipments; // SO301000Shipments
  public $FinancialSettingsBillToInfo; // SO301000FinancialSettingsBillToInfo
  public $ShippingSettingsShipToInfo; // SO301000ShippingSettingsShipToInfo
  public $FinancialSettingsBillToInfoOverrideContact; // SO301000FinancialSettingsBillToInfoOverrideContact
  public $ShippingSettingsShipToInfoOverrideContact; // SO301000ShippingSettingsShipToInfoOverrideContact
  public $ApprovalDetails; // SO301000ApprovalDetails
  public $OrderSummaryRateSelection; // SO301000OrderSummaryRateSelection
  public $OrderSummaryRateSelectionCurrencyUnitEquivalents; // SO301000OrderSummaryRateSelectionCurrencyUnitEquivalents
  public $Allocations; // SO301000Allocations
  public $DiscountDetails; // SO301000DiscountDetails
  public $SpecifyShipmentParameters; // SO301000SpecifyShipmentParameters
  public $AddInvoiceDetailsDocType; // SO301000AddInvoiceDetailsDocType
  public $CopyTo; // SO301000CopyTo
  public $RecalculatePrices; // SO301000RecalculatePrices
  public $AddInvoiceDetails; // SO301000AddInvoiceDetails
  public $PurchasingDetails; // SO301000PurchasingDetails
  public $Commissions; // SO301000Commissions
  public $ShopForRatesPackages; // SO301000ShopForRatesPackages
  public $ShopForRatesCarrierRates; // SO301000ShopForRatesCarrierRates
  public $Payments; // SO301000Payments
  public $PaymentSettingsInputMode; // SO301000PaymentSettingsInputMode
  public $PaymentSettingsCardInfo; // SO301000PaymentSettingsCardInfo
  public $PaymentSettingsDescription; // SO301000PaymentSettingsDescription
  public $InventoryLookupInventory; // SO301000InventoryLookupInventory
  public $InventoryLookup; // SO301000InventoryLookup
  public $AllocationsUnassignedQty; // SO301000AllocationsUnassignedQty
}

class SO301000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $LSSOLineGenerateLotSerial; // Action
  public $LSSOLineBinLotSerial; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $POSupplyOK; // Action
  public $Hold; // Action
  public $Cancelled; // Action
  public $CreditHold; // Action
  public $OnDeleteShipmentFlow; // Action
  public $SyncStatusFlow; // Action
  public $OnShipmentFlow; // Action
  public $OnCreateInvoiceFlow; // Action
  public $CreateShipmentAction; // Action
  public $CreateReceiptAction; // Action
  public $OpenOrderAction; // Action
  public $ReOpenOrderAction; // Action
  public $CopyOrderAction; // Action
  public $EmailSalesOrderQuoteAction; // Action
  public $ReleaseFromCreditHoldAction; // Action
  public $PrepareInvoiceAction; // Action
  public $CreatePurchaseOrderAction; // Action
  public $CreateTransferOrderAction; // Action
  public $CancelOrderAction; // Action
  public $PlaceOnBackOrderAction; // Action
  public $ValidateAddressesAction; // Action
  public $RecalculateDiscountsActionAction; // Action
  public $ApproveAction; // Action
  public $RejectAction; // Action
  public $RecalculateAvalaraTaxAction; // Action
  public $Inquiry; // Action
  public $PrintSalesOrderQuoteReport; // Action
  public $EmailSalesOrderQuoteNotification; // Action
  public $PrepareInvoice; // Action
  public $AddInvoice; // Action
  public $AddInvoiceOK; // Action
  public $CheckCopyParams; // Action
  public $ReopenOrder; // Action
  public $CopyOrder; // Action
  public $InventorySummary; // Action
  public $CalculateFreight; // Action
  public $ShopRates; // Action
  public $RefreshRates; // Action
  public $RecalculatePackages; // Action
  public $CreatePayment; // Action
  public $CreatePrepayment; // Action
  public $ViewPayment; // Action
  public $AuthorizeCCPayment; // Action
  public $VoidCCPayment; // Action
  public $CaptureCCPayment; // Action
  public $CreditCCPayment; // Action
  public $ValidateAddresses; // Action
  public $RecalculateDiscountsAction; // Action
  public $RecalcOk; // Action
  public $CreateCCPaymentMethodHF; // Action
  public $SyncCCPaymentMethods; // Action
  public $RecalcAvalara; // Action
  public $AddInvBySite; // Action
  public $AddInvSelBySite; // Action
  public $ShowImportGraphErrors; // Action
}

class SO301000OrderSummary {
  public $DisplayName; // string
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $Hold; // Field
  public $Status; // Field
  public $DonTApprove; // Field
  public $Approved; // Field
  public $Date; // Field
  public $RequestedOn; // Field
  public $CustomerOrder; // Field
  public $ExternalReference; // Field
  public $Customer; // Field
  public $Location; // Field
  public $Currency; // Field
  public $CuryViewState; // Field
  public $CreditHold; // Field
  public $DestinationWarehouse; // Field
  public $Project; // Field
  public $Description; // Field
  public $OrderedQty; // Field
  public $VATExemptTotal; // Field
  public $VATTaxableTotal; // Field
  public $TaxTotal; // Field
  public $OrderTotal; // Field
  public $ControlTotal; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO301000OrderSummaryServiceCommands
}

class SO301000OrderSummaryServiceCommands {
  public $KeyOrderType; // Key
  public $EveryOrderType; // EveryValue
  public $KeyOrderNbr; // Key
  public $EveryOrderNbr; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000CommissionsDefaultSalesperson {
  public $DisplayName; // string
  public $DefaultSalesperson; // Field
  public $ServiceCommands; // SO301000CommissionsDefaultSalespersonServiceCommands
}

class SO301000CommissionsDefaultSalespersonServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000FinancialSettingsFinancialInformation {
  public $DisplayName; // string
  public $Branch; // Field
  public $CustomerTaxZone; // Field
  public $EntityUsageType; // Field
  public $BillSeparately; // Field
  public $InvoiceNbr; // Field
  public $InvoiceDate; // Field
  public $Terms; // Field
  public $DueDate; // Field
  public $CashDiscountDate; // Field
  public $PostPeriod; // Field
  public $Owner; // Field
  public $OrigOrderType; // Field
  public $OrigOrderNbr; // Field
  public $ServiceCommands; // SO301000FinancialSettingsFinancialInformationServiceCommands
}

class SO301000FinancialSettingsFinancialInformationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000PaymentSettings {
  public $DisplayName; // string
  public $PaymentMethod; // Field
  public $CardAccountNo; // Field
  public $CardAccountNoIdentifier; // Field
  public $CashAccount; // Field
  public $PaymentRef; // Field
  public $CCNumber; // Field
  public $NewCard; // Field
  public $ProcessingStatus; // Field
  public $PCResponseReason; // Field
  public $PreAuthNbr; // Field
  public $AuthExpiresOn; // Field
  public $PreAuthorizedAmount; // Field
  public $PaymentsTotal; // Field
  public $UnpaidBalance; // Field
  public $CaptureTranNbr; // Field
  public $OrigPCRefNbr; // Field
  public $ServiceCommands; // SO301000PaymentSettingsServiceCommands
}

class SO301000PaymentSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000ShippingSettingsShippingInformation {
  public $DisplayName; // string
  public $SchedShipment; // Field
  public $ShipSeparately; // Field
  public $ShippingRule; // Field
  public $CancelBy; // Field
  public $Canceled; // Field
  public $PreferredWarehouseID; // Field
  public $ShipVia; // Field
  public $FOBPoint; // Field
  public $Priority; // Field
  public $ShippingTerms; // Field
  public $ShippingZone; // Field
  public $ResidentialDelivery; // Field
  public $SaturdayDelivery; // Field
  public $Insurance; // Field
  public $UseCustomerSAccount; // Field
  public $GroundCollect; // Field
  public $ServiceCommands; // SO301000ShippingSettingsShippingInformationServiceCommands
}

class SO301000ShippingSettingsShippingInformationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000Totals {
  public $DisplayName; // string
  public $LineTotal; // Field
  public $MiscTotal; // Field
  public $DiscountTotal; // Field
  public $TaxTotal; // Field
  public $OrderWeight; // Field
  public $OrderVolume; // Field
  public $PackageWeight; // Field
  public $FreightCost; // Field
  public $FreightCostIsUpToDate; // Field
  public $Freight; // Field
  public $PremiumFreight; // Field
  public $FreightTaxCategory; // Field
  public $UnshippedQuantity; // Field
  public $UnshippedAmount; // Field
  public $UnbilledQuantity; // Field
  public $UnbilledAmount; // Field
  public $PaymentsTotal; // Field
  public $PreAuthorizedAmount; // Field
  public $UnpaidBalance; // Field
  public $ServiceCommands; // SO301000TotalsServiceCommands
}

class SO301000TotalsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000ShopForRatesServicesSettings {
  public $DisplayName; // string
  public $OrderWeight; // Field
  public $PackageWeight; // Field
  public $ServiceCommands; // SO301000ShopForRatesServicesSettingsServiceCommands
}

class SO301000ShopForRatesServicesSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000ShopForRatesServicesSettingsIsManualPackage {
  public $DisplayName; // string
  public $IsManualPackage; // Field
  public $ServiceCommands; // SO301000ShopForRatesServicesSettingsIsManualPackageServiceCommands
}

class SO301000ShopForRatesServicesSettingsIsManualPackageServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000DocumentDetails {
  public $DisplayName; // string
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $LineNbr; // Field
  public $LineType; // Field
  public $InvoiceNbr; // Field
  public $Operation; // Field
  public $InventoryID; // Field
  public $AutoCreateIssue; // Field
  public $FreeItem; // Field
  public $Warehouse; // Field
  public $Location; // Field
  public $LineDescription; // Field
  public $UOM; // Field
  public $Quantity; // Field
  public $QtyOnShipments; // Field
  public $OpenQty; // Field
  public $UnitCost; // Field
  public $UnitPrice; // Field
  public $DiscountPercent; // Field
  public $DiscountAmount; // Field
  public $DiscountCode; // Field
  public $DiscountSequence; // Field
  public $ManualDiscount; // Field
  public $DiscUnitPrice; // Field
  public $AverageCost; // Field
  public $ExtPrice; // Field
  public $UnbilledAmount; // Field
  public $RequestedOn; // Field
  public $ShipOn; // Field
  public $ShippingRule; // Field
  public $UndershipThreshold; // Field
  public $OvershipThreshold; // Field
  public $Completed; // Field
  public $MarkForPO; // Field
  public $POSource; // Field
  public $LotSerialNbr; // Field
  public $ExpirationDate; // Field
  public $ReasonCode; // Field
  public $SalespersonID; // Field
  public $TaxCategory; // Field
  public $Commissionable; // Field
  public $AlternateID; // Field
  public $Account; // Field
  public $Subaccount; // Field
  public $ProjectTask; // Field
  public $UnitPriceForDR; // Field
  public $DiscountPercentForDR; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO301000DocumentDetailsServiceCommands
}

class SO301000DocumentDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000PurchasingDetailsPurchasingSettings {
  public $DisplayName; // string
  public $POSource; // Field
  public $VendorID; // Field
  public $POSiteID; // Field
  public $ServiceCommands; // SO301000PurchasingDetailsPurchasingSettingsServiceCommands
}

class SO301000PurchasingDetailsPurchasingSettingsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000TaxDetails {
  public $DisplayName; // string
  public $TaxID; // Field
  public $TaxRate; // Field
  public $TaxableAmount; // Field
  public $TaxAmount; // Field
  public $TaxType; // Field
  public $PendingVAT; // Field
  public $ReverseVAT; // Field
  public $IncludeInVATExemptTotal; // Field
  public $StatisticalVAT; // Field
  public $ServiceCommands; // SO301000TaxDetailsServiceCommands
}

class SO301000TaxDetailsServiceCommands {
  public $KeyTaxID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000Shipments {
  public $DisplayName; // string
  public $ShipmentNbr; // Field
  public $ShipmentType; // Field
  public $Status; // Field
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $ShipmentDate; // Field
  public $ShippedQty; // Field
  public $ShippedWeight; // Field
  public $ShippedVolume; // Field
  public $InvoiceType; // Field
  public $InvoiceNbr; // Field
  public $InventoryDocType; // Field
  public $InventoryRefNbr; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO301000ShipmentsServiceCommands
}

class SO301000ShipmentsServiceCommands {
  public $KeyShipmentNbr; // Key
  public $KeyShipmentType; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000FinancialSettingsBillToInfo {
  public $DisplayName; // string
  public $OverrideAddress; // Field
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // SO301000FinancialSettingsBillToInfoServiceCommands
}

class SO301000FinancialSettingsBillToInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000ShippingSettingsShipToInfo {
  public $DisplayName; // string
  public $OverrideAddress; // Field
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // SO301000ShippingSettingsShipToInfoServiceCommands
}

class SO301000ShippingSettingsShipToInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000FinancialSettingsBillToInfoOverrideContact {
  public $DisplayName; // string
  public $OverrideContact; // Field
  public $BusinessName; // Field
  public $Attention; // Field
  public $Phone1; // Field
  public $Email; // Field
  public $ServiceCommands; // SO301000FinancialSettingsBillToInfoOverrideContactServiceCommands
}

class SO301000FinancialSettingsBillToInfoOverrideContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000ShippingSettingsShipToInfoOverrideContact {
  public $DisplayName; // string
  public $OverrideContact; // Field
  public $BusinessName; // Field
  public $Attention; // Field
  public $Phone1; // Field
  public $Email; // Field
  public $ServiceCommands; // SO301000ShippingSettingsShipToInfoOverrideContactServiceCommands
}

class SO301000ShippingSettingsShipToInfoOverrideContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000ApprovalDetails {
  public $DisplayName; // string
  public $Approver; // Field
  public $ApproverName; // Field
  public $ApprovedBy; // Field
  public $ApprovedByName; // Field
  public $Date; // Field
  public $Status; // Field
  public $Workgroup; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO301000ApprovalDetailsServiceCommands
}

class SO301000ApprovalDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000OrderSummaryRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // SO301000OrderSummaryRateSelectionServiceCommands
}

class SO301000OrderSummaryRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000OrderSummaryRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // SO301000OrderSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class SO301000OrderSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000Allocations {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $ShipOn; // Field
  public $Allocated; // Field
  public $AllocWarehouse; // Field
  public $Completed; // Field
  public $Location; // Field
  public $LotSerialNbr; // Field
  public $Quantity; // Field
  public $QtyOnShipments; // Field
  public $QtyReceived; // Field
  public $UOM; // Field
  public $ExpirationDate; // Field
  public $RelatedDocument; // Field
  public $ServiceCommands; // SO301000AllocationsServiceCommands
}

class SO301000AllocationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000DiscountDetails {
  public $DisplayName; // string
  public $SkipDiscount; // Field
  public $DiscountCode; // Field
  public $SequenceID; // Field
  public $Type; // Field
  public $ManualDiscount; // Field
  public $DiscountableAmt; // Field
  public $DiscountableQty; // Field
  public $DiscountAmt; // Field
  public $Discount; // Field
  public $FreeItem; // Field
  public $FreeItemQty; // Field
  public $ServiceCommands; // SO301000DiscountDetailsServiceCommands
}

class SO301000DiscountDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000SpecifyShipmentParameters {
  public $DisplayName; // string
  public $ShipmentDate; // Field
  public $WarehouseID; // Field
  public $ServiceCommands; // SO301000SpecifyShipmentParametersServiceCommands
}

class SO301000SpecifyShipmentParametersServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000AddInvoiceDetailsDocType {
  public $DisplayName; // string
  public $DocType; // Field
  public $RefNbr; // Field
  public $ServiceCommands; // SO301000AddInvoiceDetailsDocTypeServiceCommands
}

class SO301000AddInvoiceDetailsDocTypeServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000CopyTo {
  public $DisplayName; // string
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $RecalcUnitPrices; // Field
  public $OverrideManualPrices; // Field
  public $RecalcDiscounts; // Field
  public $OverrideManualDiscounts; // Field
  public $ServiceCommands; // SO301000CopyToServiceCommands
}

class SO301000CopyToServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000RecalculatePrices {
  public $DisplayName; // string
  public $RecalcTarget; // Field
  public $RecalcUnitPrices; // Field
  public $OverrideManualPrices; // Field
  public $RecalcDiscounts; // Field
  public $OverrideManualDiscounts; // Field
  public $ServiceCommands; // SO301000RecalculatePricesServiceCommands
}

class SO301000RecalculatePricesServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000AddInvoiceDetails {
  public $DisplayName; // string
  public $Selected; // Field
  public $InventoryID; // Field
  public $Warehouse; // Field
  public $Location; // Field
  public $LotSerialNbr; // Field
  public $UOM; // Field
  public $Quantity; // Field
  public $LineDescription; // Field
  public $ServiceCommands; // SO301000AddInvoiceDetailsServiceCommands
}

class SO301000AddInvoiceDetailsServiceCommands {
  public $ParameterAddInvoiceFilterRefNbr; // Parameter
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000PurchasingDetails {
  public $DisplayName; // string
  public $Selected; // Field
  public $POType; // Field
  public $PONbr; // Field
  public $VendorRef; // Field
  public $LineType; // Field
  public $InventoryID; // Field
  public $Vendor; // Field
  public $VendorName; // Field
  public $Promised; // Field
  public $UOM; // Field
  public $OrderQty; // Field
  public $OpenQty; // Field
  public $LineDescription; // Field
  public $ServiceCommands; // SO301000PurchasingDetailsServiceCommands
}

class SO301000PurchasingDetailsServiceCommands {
  public $KeyPOType; // Key
  public $KeyPONbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000Commissions {
  public $DisplayName; // string
  public $SalespersonID; // Field
  public $Commission; // Field
  public $CommissionAmt; // Field
  public $CommissionableAmount; // Field
  public $ServiceCommands; // SO301000CommissionsServiceCommands
}

class SO301000CommissionsServiceCommands {
  public $KeySalespersonID; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000ShopForRatesPackages {
  public $DisplayName; // string
  public $BoxID; // Field
  public $Description; // Field
  public $ShipFromWarehouse; // Field
  public $WeightUOM; // Field
  public $Weight; // Field
  public $DeclaredValue; // Field
  public $COD; // Field
  public $ServiceCommands; // SO301000ShopForRatesPackagesServiceCommands
}

class SO301000ShopForRatesPackagesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000ShopForRatesCarrierRates {
  public $DisplayName; // string
  public $Selected; // Field
  public $Code; // Field
  public $Description; // Field
  public $Amount; // Field
  public $DaysInTransit; // Field
  public $DeliveryDate; // Field
  public $ServiceCommands; // SO301000ShopForRatesCarrierRatesServiceCommands
}

class SO301000ShopForRatesCarrierRatesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000Payments {
  public $DisplayName; // string
  public $DocType; // Field
  public $ReferenceNbr; // Field
  public $AppliedToOrder; // Field
  public $TransferredToInvoice; // Field
  public $Balance; // Field
  public $Status; // Field
  public $PaymentRef; // Field
  public $PaymentMethod; // Field
  public $CashAccount; // Field
  public $PaymentAmount; // Field
  public $Currency; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO301000PaymentsServiceCommands
}

class SO301000PaymentsServiceCommands {
  public $KeyDocType; // Key
  public $KeyReferenceNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000PaymentSettingsInputMode {
  public $DisplayName; // string
  public $InputMode; // Field
  public $ServiceCommands; // SO301000PaymentSettingsInputModeServiceCommands
}

class SO301000PaymentSettingsInputModeServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000PaymentSettingsCardInfo {
  public $DisplayName; // string
  public $ProcCenterID; // Field
  public $Identifier; // Field
  public $ServiceCommands; // SO301000PaymentSettingsCardInfoServiceCommands
}

class SO301000PaymentSettingsCardInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000PaymentSettingsDescription {
  public $DisplayName; // string
  public $Description; // Field
  public $Value; // Field
  public $ServiceCommands; // SO301000PaymentSettingsDescriptionServiceCommands
}

class SO301000PaymentSettingsDescriptionServiceCommands {
  public $KeyDescription; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000InventoryLookupInventory {
  public $DisplayName; // string
  public $Inventory; // Field
  public $BarCode; // Field
  public $SiteID; // Field
  public $ItemClassID; // Field
  public $SubItem; // Field
  public $HistoryDate; // Field
  public $Mode; // Field
  public $OnlyAvailable; // Field
  public $ServiceCommands; // SO301000InventoryLookupInventoryServiceCommands
}

class SO301000InventoryLookupInventoryServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000InventoryLookup {
  public $DisplayName; // string
  public $Selected; // Field
  public $QtySelected; // Field
  public $Warehouse; // Field
  public $ItemClassID; // Field
  public $ItemClassDescription; // Field
  public $PriceClassID; // Field
  public $PriceClassDescription; // Field
  public $PreferredVendorID; // Field
  public $PreferredVendorName; // Field
  public $InventoryIDInventoryCD; // Field
  public $Description; // Field
  public $SalesUnit; // Field
  public $QtyAvailable; // Field
  public $QtyOnHand; // Field
  public $QtyLastSales; // Field
  public $Currency; // Field
  public $LastUnitPrice; // Field
  public $LastSalesDate; // Field
  public $AlternateID; // Field
  public $AlternateType; // Field
  public $AlternateDescription; // Field
  public $ServiceCommands; // SO301000InventoryLookupServiceCommands
}

class SO301000InventoryLookupServiceCommands {
  public $KeyWarehouse; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO301000AllocationsUnassignedQty {
  public $DisplayName; // string
  public $UnassignedQty; // Field
  public $QuantityToGenerate; // Field
  public $StartLotSerialNumber; // Field
  public $ServiceCommands; // SO301000AllocationsUnassignedQtyServiceCommands
}

class SO301000AllocationsUnassignedQtyServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO301000PrimaryKey {
  public $OrderType; // Value
  public $OrderNbr; // Value
}

class SO301000Clear {
}

class SO301000ClearResponse {
}

class SO301000GetProcessStatus {
}

class SO301000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class SO301000GetSchema {
}

class SO301000GetSchemaResponse {
  public $GetSchemaResult; // SO301000Content
}

class SO301000SetSchema {
  public $schema; // SO301000Content
}

class SO301000SetSchemaResponse {
}

class SO301000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class SO301000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class SO301000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class SO301000ImportResponse {
  public $ImportResult; // SO301000ArrayOfImportResult
}

class SO301000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // SO301000PrimaryKey
}

class SO301000ArrayOfImportResult {
  public $ImportResult; // SO301000ImportResult
}

class SO301000Submit {
  public $commands; // ArrayOfCommand
}

class SO301000ArrayOfContent {
  public $Content; // SO301000Content
}

class SO301000SubmitResponse {
  public $SubmitResult; // SO301000ArrayOfContent
}

class SO302000Content {
  public $Actions; // SO302000Actions
  public $ShipmentSummary; // SO302000ShipmentSummary
  public $ShippingSettingsShippingInformation; // SO302000ShippingSettingsShippingInformation
  public $DocumentDetails; // SO302000DocumentDetails
  public $Allocations; // SO302000Allocations
  public $ShippingSettingsShipToInfo; // SO302000ShippingSettingsShipToInfo
  public $ShippingSettingsShipToInfoOverrideContact; // SO302000ShippingSettingsShipToInfoOverrideContact
  public $Orders; // SO302000Orders
  public $Packages; // SO302000Packages
  public $ShippingSettingsShippingInformationRateSelection; // SO302000ShippingSettingsShippingInformationRateSelection
  public $ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalents; // SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalents
  public $AddSalesOrderOperation; // SO302000AddSalesOrderOperation
  public $AddSalesOrder; // SO302000AddSalesOrder
  public $AllocationsUnassignedQty; // SO302000AllocationsUnassignedQty
}

class SO302000Actions {
  public $Save; // Action
  public $Cancel; // Action
  public $Insert; // Action
  public $Delete; // Action
  public $CopyDocumentCopyPaste; // Action
  public $PasteDocumentCopyPaste; // Action
  public $SaveTemplateCopyPaste; // Action
  public $First; // Action
  public $Previous; // Action
  public $Next; // Action
  public $Last; // Action
  public $LSSOShipLineGenerateLotSerial; // Action
  public $LSSOShipLineBinLotSerial; // Action
  public $NewTask; // Action
  public $NewEvent; // Action
  public $ViewActivity; // Action
  public $NewMailActivity; // Action
  public $OpenActivityOwner; // Action
  public $ViewAllActivities; // Action
  public $CNewActivity; // Action
  public $ENewActivity; // Action
  public $MNewActivity; // Action
  public $NNewActivity; // Action
  public $PNewActivity; // Action
  public $RNewActivity; // Action
  public $WNewActivity; // Action
  public $Hold; // Action
  public $SyncStatusFlow; // Action
  public $OnConfirmationFlow; // Action
  public $EmailShipmentNotification; // Action
  public $ConfirmShipmentAction; // Action
  public $PrepareInvoiceAction; // Action
  public $PrepareDropShipInvoiceAction; // Action
  public $UpdateINAction; // Action
  public $CorrectShipmentAction; // Action
  public $PrintLabelsAction; // Action
  public $GetReturnLabelsAction; // Action
  public $CancelReturnAction; // Action
  public $ValidateAddressesAction; // Action
  public $EmailShipmentAction; // Action
  public $Inquiry; // Action
  public $PrintShipmentConfirmationReport; // Action
  public $PrintPickListReport; // Action
  public $RecalculatePackages; // Action
  public $InventorySummary; // Action
  public $SelectSO; // Action
  public $AddSO; // Action
  public $AddSOCancel; // Action
  public $ValidateAddresses; // Action
  public $ShowImportGraphErrors; // Action
}

class SO302000ShipmentSummary {
  public $DisplayName; // string
  public $ShipmentNbr; // Field
  public $Type; // Field
  public $Status; // Field
  public $Hold; // Field
  public $Operation; // Field
  public $ShipmentDate; // Field
  public $Customer; // Field
  public $Location; // Field
  public $WarehouseID; // Field
  public $ToWarehouse; // Field
  public $Workgroup; // Field
  public $Owner; // Field
  public $ShippedQuantity; // Field
  public $ControlQuantity; // Field
  public $ShippedWeight; // Field
  public $ShippedVolume; // Field
  public $Packages; // Field
  public $PackageWeight; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO302000ShipmentSummaryServiceCommands
}

class SO302000ShipmentSummaryServiceCommands {
  public $KeyShipmentNbr; // Key
  public $EveryShipmentNbr; // EveryValue
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000ShippingSettingsShippingInformation {
  public $DisplayName; // string
  public $ShipVia; // Field
  public $FOBPoint; // Field
  public $ShippingTerms; // Field
  public $ShippingZoneID; // Field
  public $ResidentialDelivery; // Field
  public $SaturdayDelivery; // Field
  public $UseCustomerSAccount; // Field
  public $Insurance; // Field
  public $GroundCollect; // Field
  public $FreightCurrency; // Field
  public $CuryViewState; // Field
  public $FreightCost; // Field
  public $FreightAmt; // Field
  public $ServiceCommands; // SO302000ShippingSettingsShippingInformationServiceCommands
}

class SO302000ShippingSettingsShippingInformationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000DocumentDetails {
  public $DisplayName; // string
  public $ShipmentNbr; // Field
  public $LineNbr; // Field
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $OrderLineNbr; // Field
  public $InventoryID; // Field
  public $FreeItem; // Field
  public $Warehouse; // Field
  public $Location; // Field
  public $UOM; // Field
  public $ShippedQty; // Field
  public $OriginalQty; // Field
  public $OrderedQty; // Field
  public $OpenQty; // Field
  public $LotSerialNbr; // Field
  public $ExpirationDate; // Field
  public $ReasonCode; // Field
  public $Description; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO302000DocumentDetailsServiceCommands
}

class SO302000DocumentDetailsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000Allocations {
  public $DisplayName; // string
  public $InventoryID; // Field
  public $Location; // Field
  public $LotSerialNbr; // Field
  public $Quantity; // Field
  public $UOM; // Field
  public $ExpirationDate; // Field
  public $Description; // Field
  public $ServiceCommands; // SO302000AllocationsServiceCommands
}

class SO302000AllocationsServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO302000ShippingSettingsShipToInfo {
  public $DisplayName; // string
  public $OverrideAddress; // Field
  public $Validated; // Field
  public $AddressLine1; // Field
  public $AddressLine2; // Field
  public $City; // Field
  public $Country; // Field
  public $State; // Field
  public $PostalCode; // Field
  public $ServiceCommands; // SO302000ShippingSettingsShipToInfoServiceCommands
}

class SO302000ShippingSettingsShipToInfoServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000ShippingSettingsShipToInfoOverrideContact {
  public $DisplayName; // string
  public $OverrideContact; // Field
  public $BusinessName; // Field
  public $Attention; // Field
  public $Phone1; // Field
  public $Email; // Field
  public $ServiceCommands; // SO302000ShippingSettingsShipToInfoOverrideContactServiceCommands
}

class SO302000ShippingSettingsShipToInfoOverrideContactServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000Orders {
  public $DisplayName; // string
  public $ShipmentNbr; // Field
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $ShippedQty; // Field
  public $ShippedWeight; // Field
  public $ShippedVolume; // Field
  public $InvoiceType; // Field
  public $InvoiceNbr; // Field
  public $InventoryDocType; // Field
  public $InventoryRefNbr; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO302000OrdersServiceCommands
}

class SO302000OrdersServiceCommands {
  public $KeyOrderType; // Key
  public $KeyOrderNbr; // Key
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000Packages {
  public $DisplayName; // string
  public $Confirmed; // Field
  public $BoxID; // Field
  public $Type; // Field
  public $Description; // Field
  public $Weight; // Field
  public $UOM; // Field
  public $DeclaredValue; // Field
  public $CODAmount; // Field
  public $TrackingNumber; // Field
  public $CustomRefNbr1; // Field
  public $CustomRefNbr2; // Field
  public $NoteText; // Field
  public $ServiceCommands; // SO302000PackagesServiceCommands
}

class SO302000PackagesServiceCommands {
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000ShippingSettingsShippingInformationRateSelection {
  public $DisplayName; // string
  public $CurrRateTypeID; // Field
  public $EffectiveDate; // Field
  public $ServiceCommands; // SO302000ShippingSettingsShippingInformationRateSelectionServiceCommands
}

class SO302000ShippingSettingsShippingInformationRateSelectionServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalents {
  public $DisplayName; // string
  public $CurrencyID; // Field
  public $BaseCurrencyID; // Field
  public $CurrRate; // Field
  public $ReciprocalRate; // Field
  public $ServiceCommands; // SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalentsServiceCommands
}

class SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalentsServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000AddSalesOrderOperation {
  public $DisplayName; // string
  public $Operation; // Field
  public $OrderType; // Field
  public $OrderNbr; // Field
  public $ServiceCommands; // SO302000AddSalesOrderOperationServiceCommands
}

class SO302000AddSalesOrderOperationServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000AddSalesOrder {
  public $DisplayName; // string
  public $Selected; // Field
  public $LineNbr; // Field
  public $InventoryID; // Field
  public $UOM; // Field
  public $Location; // Field
  public $LotSerialNbr; // Field
  public $SchedShipDate; // Field
  public $Quantity; // Field
  public $OpenQty; // Field
  public $LineDescription; // Field
  public $ServiceCommands; // SO302000AddSalesOrderServiceCommands
}

class SO302000AddSalesOrderServiceCommands {
  public $ParameterAddSOFilterOrderType; // Parameter
  public $ParameterAddSOFilterOrderNbr; // Parameter
  public $ParameterAddSOFilterOperation; // Parameter
  public $NewRow; // NewRow
  public $RowNumber; // RowNumber
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
}

class SO302000AllocationsUnassignedQty {
  public $DisplayName; // string
  public $UnassignedQty; // Field
  public $QuantityToGenerate; // Field
  public $StartLotSerialNumber; // Field
  public $ServiceCommands; // SO302000AllocationsUnassignedQtyServiceCommands
}

class SO302000AllocationsUnassignedQtyServiceCommands {
  public $DeleteRow; // DeleteRow
  public $DialogAnswer; // Answer
  public $Attachment; // Attachment
}

class SO302000PrimaryKey {
  public $ShipmentNbr; // Value
}

class SO302000Clear {
}

class SO302000ClearResponse {
}

class SO302000GetProcessStatus {
}

class SO302000GetProcessStatusResponse {
  public $GetProcessStatusResult; // ProcessResult
}

class SO302000GetSchema {
}

class SO302000GetSchemaResponse {
  public $GetSchemaResult; // SO302000Content
}

class SO302000SetSchema {
  public $schema; // SO302000Content
}

class SO302000SetSchemaResponse {
}

class SO302000Export {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $topCount; // int
  public $includeHeaders; // boolean
  public $breakOnError; // boolean
}

class SO302000ExportResponse {
  public $ExportResult; // ArrayOfArrayOfString
}

class SO302000Import {
  public $commands; // ArrayOfCommand
  public $filters; // ArrayOfFilter
  public $data; // ArrayOfArrayOfString
  public $includedHeaders; // boolean
  public $breakOnError; // boolean
  public $breakOnIncorrectTarget; // boolean
}

class SO302000ImportResponse {
  public $ImportResult; // SO302000ArrayOfImportResult
}

class SO302000ImportResult {
  public $Processed; // boolean
  public $Error; // string
  public $Keys; // SO302000PrimaryKey
}

class SO302000ArrayOfImportResult {
  public $ImportResult; // SO302000ImportResult
}

class SO302000Submit {
  public $commands; // ArrayOfCommand
}

class SO302000ArrayOfContent {
  public $Content; // SO302000Content
}

class SO302000SubmitResponse {
  public $SubmitResult; // SO302000ArrayOfContent
}


/**
 * Screen class
 *
 *
 *
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Screen extends SoapClient {

  private static $classmap = array(
                                    'ProcessResult' => 'ProcessResult',
                                    'ProcessStatus' => 'ProcessStatus',
                                    'GetScenario' => 'GetScenario',
                                    'GetScenarioResponse' => 'GetScenarioResponse',
                                    'Command' => 'Command',
                                    'ElementDescriptor' => 'ElementDescriptor',
                                    'ElementTypes' => 'ElementTypes',
                                    'SchemaMode' => 'SchemaMode',
                                    'EveryValue' => 'EveryValue',
                                    'Key' => 'Key',
                                    'Action' => 'Action',
                                    'Field' => 'Field',
                                    'Value' => 'Value',
                                    'Answer' => 'Answer',
                                    'RowNumber' => 'RowNumber',
                                    'NewRow' => 'NewRow',
                                    'DeleteRow' => 'DeleteRow',
                                    'Parameter' => 'Parameter',
                                    'Attachment' => 'Attachment',
                                    'Filter' => 'Filter',
                                    'FilterCondition' => 'FilterCondition',
                                    'FilterOperator' => 'FilterOperator',
                                    'Login' => 'Login',
                                    'LoginResult' => 'LoginResult',
                                    'ErrorCode' => 'ErrorCode',
                                    'LoginResponse' => 'LoginResponse',
                                    'Logout' => 'Logout',
                                    'LogoutResponse' => 'LogoutResponse',
                                    'SetBusinessDate' => 'SetBusinessDate',
                                    'SetBusinessDateResponse' => 'SetBusinessDateResponse',
                                    'SetLocaleName' => 'SetLocaleName',
                                    'SetLocaleNameResponse' => 'SetLocaleNameResponse',
                                    'SetSchemaMode' => 'SetSchemaMode',
                                    'SetSchemaModeResponse' => 'SetSchemaModeResponse',
                                    'AR302000Content' => 'AR302000Content',
                                    'AR302000Actions' => 'AR302000Actions',
                                    'AR302000PaymentSummary' => 'AR302000PaymentSummary',
                                    'AR302000PaymentSummaryServiceCommands' => 'AR302000PaymentSummaryServiceCommands',
                                    'AR302000FinancialDetailsLinkToGL' => 'AR302000FinancialDetailsLinkToGL',
                                    'AR302000FinancialDetailsLinkToGLServiceCommands' => 'AR302000FinancialDetailsLinkToGLServiceCommands',
                                    'AR302000FinancialDetailsPaymentInformation' => 'AR302000FinancialDetailsPaymentInformation',
                                    'AR302000FinancialDetailsPaymentInformationServiceCommands' => 'AR302000FinancialDetailsPaymentInformationServiceCommands',
                                    'AR302000DocumentsToApply' => 'AR302000DocumentsToApply',
                                    'AR302000DocumentsToApplyServiceCommands' => 'AR302000DocumentsToApplyServiceCommands',
                                    'AR302000ApplicationHistory' => 'AR302000ApplicationHistory',
                                    'AR302000ApplicationHistoryServiceCommands' => 'AR302000ApplicationHistoryServiceCommands',
                                    'AR302000OrdersToApply' => 'AR302000OrdersToApply',
                                    'AR302000OrdersToApplyServiceCommands' => 'AR302000OrdersToApplyServiceCommands',
                                    'AR302000PaymentSummaryRateSelection' => 'AR302000PaymentSummaryRateSelection',
                                    'AR302000PaymentSummaryRateSelectionServiceCommands' => 'AR302000PaymentSummaryRateSelectionServiceCommands',
                                    'AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalents' => 'AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalents',
                                    'AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'AR302000PaymentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'AR302000CreditCardProcessingInfo' => 'AR302000CreditCardProcessingInfo',
                                    'AR302000CreditCardProcessingInfoServiceCommands' => 'AR302000CreditCardProcessingInfoServiceCommands',
                                    'AR302000FinanceCharges' => 'AR302000FinanceCharges',
                                    'AR302000FinanceChargesServiceCommands' => 'AR302000FinanceChargesServiceCommands',
                                    'AR302000RecordCCPaymentCCPaymentData' => 'AR302000RecordCCPaymentCCPaymentData',
                                    'AR302000RecordCCPaymentCCPaymentDataServiceCommands' => 'AR302000RecordCCPaymentCCPaymentDataServiceCommands',
                                    'AR302000CCPaymentWithExternalAuthorizationCCPaymentData' => 'AR302000CCPaymentWithExternalAuthorizationCCPaymentData',
                                    'AR302000CCPaymentWithExternalAuthorizationCCPaymentDataServiceCommands' => 'AR302000CCPaymentWithExternalAuthorizationCCPaymentDataServiceCommands',
                                    'AR302000LoadOptions' => 'AR302000LoadOptions',
                                    'AR302000LoadOptionsServiceCommands' => 'AR302000LoadOptionsServiceCommands',
                                    'AR302000FinancialDetailsVoucherDetails' => 'AR302000FinancialDetailsVoucherDetails',
                                    'AR302000FinancialDetailsVoucherDetailsServiceCommands' => 'AR302000FinancialDetailsVoucherDetailsServiceCommands',
                                    'AR302000PrimaryKey' => 'AR302000PrimaryKey',
                                    'AR302000Clear' => 'AR302000Clear',
                                    'AR302000ClearResponse' => 'AR302000ClearResponse',
                                    'AR302000GetProcessStatus' => 'AR302000GetProcessStatus',
                                    'AR302000GetProcessStatusResponse' => 'AR302000GetProcessStatusResponse',
                                    'AR302000GetSchema' => 'AR302000GetSchema',
                                    'AR302000GetSchemaResponse' => 'AR302000GetSchemaResponse',
                                    'AR302000SetSchema' => 'AR302000SetSchema',
                                    'AR302000SetSchemaResponse' => 'AR302000SetSchemaResponse',
                                    'AR302000Export' => 'AR302000Export',
                                    'AR302000ExportResponse' => 'AR302000ExportResponse',
                                    'AR302000Import' => 'AR302000Import',
                                    'AR302000ImportResponse' => 'AR302000ImportResponse',
                                    'AR302000ImportResult' => 'AR302000ImportResult',
                                    'AR302000ArrayOfImportResult' => 'AR302000ArrayOfImportResult',
                                    'AR302000Submit' => 'AR302000Submit',
                                    'AR302000ArrayOfContent' => 'AR302000ArrayOfContent',
                                    'AR302000SubmitResponse' => 'AR302000SubmitResponse',
                                    'AR303000Content' => 'AR303000Content',
                                    'AR303000Actions' => 'AR303000Actions',
                                    'AR303000CustomerSummary' => 'AR303000CustomerSummary',
                                    'AR303000CustomerSummaryServiceCommands' => 'AR303000CustomerSummaryServiceCommands',
                                    'AR303000GeneralInfo' => 'AR303000GeneralInfo',
                                    'AR303000GeneralInfoServiceCommands' => 'AR303000GeneralInfoServiceCommands',
                                    'AR303000GeneralInfoFinancialSettings' => 'AR303000GeneralInfoFinancialSettings',
                                    'AR303000GeneralInfoFinancialSettingsServiceCommands' => 'AR303000GeneralInfoFinancialSettingsServiceCommands',
                                    'AR303000GeneralInfoCreditVerificationRulesCreditVerification' => 'AR303000GeneralInfoCreditVerificationRulesCreditVerification',
                                    'AR303000GeneralInfoCreditVerificationRulesCreditVerificationServiceCommands' => 'AR303000GeneralInfoCreditVerificationRulesCreditVerificationServiceCommands',
                                    'AR303000BillingSettingsBillToContactSameAsMain' => 'AR303000BillingSettingsBillToContactSameAsMain',
                                    'AR303000BillingSettingsBillToContactSameAsMainServiceCommands' => 'AR303000BillingSettingsBillToContactSameAsMainServiceCommands',
                                    'AR303000BillingSettingsBillToAddressSameAsMain' => 'AR303000BillingSettingsBillToAddressSameAsMain',
                                    'AR303000BillingSettingsBillToAddressSameAsMainServiceCommands' => 'AR303000BillingSettingsBillToAddressSameAsMainServiceCommands',
                                    'AR303000BillingSettingsParentInfo' => 'AR303000BillingSettingsParentInfo',
                                    'AR303000BillingSettingsParentInfoServiceCommands' => 'AR303000BillingSettingsParentInfoServiceCommands',
                                    'AR303000BillingSettingsPrintAndEmailSettings' => 'AR303000BillingSettingsPrintAndEmailSettings',
                                    'AR303000BillingSettingsPrintAndEmailSettingsServiceCommands' => 'AR303000BillingSettingsPrintAndEmailSettingsServiceCommands',
                                    'AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethod' => 'AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethod',
                                    'AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethodServiceCommands' => 'AR303000BillingSettingsDefaultPaymentMethodDefaultPaymentMethodServiceCommands',
                                    'AR303000GLAccountsCashDiscountAccount' => 'AR303000GLAccountsCashDiscountAccount',
                                    'AR303000GLAccountsCashDiscountAccountServiceCommands' => 'AR303000GLAccountsCashDiscountAccountServiceCommands',
                                    'AR303000GeneralInfoMainAddress' => 'AR303000GeneralInfoMainAddress',
                                    'AR303000GeneralInfoMainAddressServiceCommands' => 'AR303000GeneralInfoMainAddressServiceCommands',
                                    'AR303000BillingSettingsBillToAddress' => 'AR303000BillingSettingsBillToAddress',
                                    'AR303000BillingSettingsBillToAddressServiceCommands' => 'AR303000BillingSettingsBillToAddressServiceCommands',
                                    'AR303000GeneralInfoMainContact' => 'AR303000GeneralInfoMainContact',
                                    'AR303000GeneralInfoMainContactServiceCommands' => 'AR303000GeneralInfoMainContactServiceCommands',
                                    'AR303000DeliverySettingsShippingContact' => 'AR303000DeliverySettingsShippingContact',
                                    'AR303000DeliverySettingsShippingContactServiceCommands' => 'AR303000DeliverySettingsShippingContactServiceCommands',
                                    'AR303000BillingSettingsBillToContact' => 'AR303000BillingSettingsBillToContact',
                                    'AR303000BillingSettingsBillToContactServiceCommands' => 'AR303000BillingSettingsBillToContactServiceCommands',
                                    'AR303000Locations' => 'AR303000Locations',
                                    'AR303000LocationsServiceCommands' => 'AR303000LocationsServiceCommands',
                                    'AR303000DeliverySettingsShippingContactSameAsMain' => 'AR303000DeliverySettingsShippingContactSameAsMain',
                                    'AR303000DeliverySettingsShippingContactSameAsMainServiceCommands' => 'AR303000DeliverySettingsShippingContactSameAsMainServiceCommands',
                                    'AR303000DeliverySettingsShippingAddress' => 'AR303000DeliverySettingsShippingAddress',
                                    'AR303000DeliverySettingsShippingAddressServiceCommands' => 'AR303000DeliverySettingsShippingAddressServiceCommands',
                                    'AR303000DeliverySettingsDefaultLocationSettings' => 'AR303000DeliverySettingsDefaultLocationSettings',
                                    'AR303000DeliverySettingsDefaultLocationSettingsServiceCommands' => 'AR303000DeliverySettingsDefaultLocationSettingsServiceCommands',
                                    'AR303000DeliverySettingsShippingInstructions' => 'AR303000DeliverySettingsShippingInstructions',
                                    'AR303000DeliverySettingsShippingInstructionsServiceCommands' => 'AR303000DeliverySettingsShippingInstructionsServiceCommands',
                                    'AR303000GLAccounts' => 'AR303000GLAccounts',
                                    'AR303000GLAccountsServiceCommands' => 'AR303000GLAccountsServiceCommands',
                                    'AR303000Contacts' => 'AR303000Contacts',
                                    'AR303000ContactsServiceCommands' => 'AR303000ContactsServiceCommands',
                                    'AR303000Salespersons' => 'AR303000Salespersons',
                                    'AR303000SalespersonsServiceCommands' => 'AR303000SalespersonsServiceCommands',
                                    'AR303000CustomerSummaryBalance' => 'AR303000CustomerSummaryBalance',
                                    'AR303000CustomerSummaryBalanceServiceCommands' => 'AR303000CustomerSummaryBalanceServiceCommands',
                                    'AR303000GeneralInfoCreditVerificationRules' => 'AR303000GeneralInfoCreditVerificationRules',
                                    'AR303000GeneralInfoCreditVerificationRulesServiceCommands' => 'AR303000GeneralInfoCreditVerificationRulesServiceCommands',
                                    'AR303000BillingSettingsDefaultPaymentMethod' => 'AR303000BillingSettingsDefaultPaymentMethod',
                                    'AR303000BillingSettingsDefaultPaymentMethodServiceCommands' => 'AR303000BillingSettingsDefaultPaymentMethodServiceCommands',
                                    'AR303000PaymentMethods' => 'AR303000PaymentMethods',
                                    'AR303000PaymentMethodsServiceCommands' => 'AR303000PaymentMethodsServiceCommands',
                                    'AR303000Attributes' => 'AR303000Attributes',
                                    'AR303000AttributesServiceCommands' => 'AR303000AttributesServiceCommands',
                                    'AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetails' => 'AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetails',
                                    'AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetailsServiceCommands' => 'AR303000BillingSettingsDefaultPaymentMethodPaymentMethodDetailsServiceCommands',
                                    'AR303000MailingSettingsMailings' => 'AR303000MailingSettingsMailings',
                                    'AR303000MailingSettingsMailingsServiceCommands' => 'AR303000MailingSettingsMailingsServiceCommands',
                                    'AR303000MailingSettingsRecipients' => 'AR303000MailingSettingsRecipients',
                                    'AR303000MailingSettingsRecipientsServiceCommands' => 'AR303000MailingSettingsRecipientsServiceCommands',
                                    'AR303000ChildAccounts' => 'AR303000ChildAccounts',
                                    'AR303000ChildAccountsServiceCommands' => 'AR303000ChildAccountsServiceCommands',
                                    'AR303000SpecifyNewID' => 'AR303000SpecifyNewID',
                                    'AR303000SpecifyNewIDServiceCommands' => 'AR303000SpecifyNewIDServiceCommands',
                                    'AR303000PrimaryKey' => 'AR303000PrimaryKey',
                                    'AR303000Clear' => 'AR303000Clear',
                                    'AR303000ClearResponse' => 'AR303000ClearResponse',
                                    'AR303000GetProcessStatus' => 'AR303000GetProcessStatus',
                                    'AR303000GetProcessStatusResponse' => 'AR303000GetProcessStatusResponse',
                                    'AR303000GetSchema' => 'AR303000GetSchema',
                                    'AR303000GetSchemaResponse' => 'AR303000GetSchemaResponse',
                                    'AR303000SetSchema' => 'AR303000SetSchema',
                                    'AR303000SetSchemaResponse' => 'AR303000SetSchemaResponse',
                                    'AR303000Export' => 'AR303000Export',
                                    'AR303000ExportResponse' => 'AR303000ExportResponse',
                                    'AR303000Import' => 'AR303000Import',
                                    'AR303000ImportResponse' => 'AR303000ImportResponse',
                                    'AR303000ImportResult' => 'AR303000ImportResult',
                                    'AR303000ArrayOfImportResult' => 'AR303000ArrayOfImportResult',
                                    'AR303000Submit' => 'AR303000Submit',
                                    'AR303000ArrayOfContent' => 'AR303000ArrayOfContent',
                                    'AR303000SubmitResponse' => 'AR303000SubmitResponse',
                                    'CA304000Content' => 'CA304000Content',
                                    'CA304000Actions' => 'CA304000Actions',
                                    'CA304000TransactionSummary' => 'CA304000TransactionSummary',
                                    'CA304000TransactionSummaryServiceCommands' => 'CA304000TransactionSummaryServiceCommands',
                                    'CA304000FinancialDetailsLinkToGL' => 'CA304000FinancialDetailsLinkToGL',
                                    'CA304000FinancialDetailsLinkToGLServiceCommands' => 'CA304000FinancialDetailsLinkToGLServiceCommands',
                                    'CA304000FinancialDetailsTaxSettings' => 'CA304000FinancialDetailsTaxSettings',
                                    'CA304000FinancialDetailsTaxSettingsServiceCommands' => 'CA304000FinancialDetailsTaxSettingsServiceCommands',
                                    'CA304000TransactionDetails' => 'CA304000TransactionDetails',
                                    'CA304000TransactionDetailsServiceCommands' => 'CA304000TransactionDetailsServiceCommands',
                                    'CA304000TaxDetails' => 'CA304000TaxDetails',
                                    'CA304000TaxDetailsServiceCommands' => 'CA304000TaxDetailsServiceCommands',
                                    'CA304000ApprovalDetails' => 'CA304000ApprovalDetails',
                                    'CA304000ApprovalDetailsServiceCommands' => 'CA304000ApprovalDetailsServiceCommands',
                                    'CA304000TransactionSummaryRateSelection' => 'CA304000TransactionSummaryRateSelection',
                                    'CA304000TransactionSummaryRateSelectionServiceCommands' => 'CA304000TransactionSummaryRateSelectionServiceCommands',
                                    'CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalents' => 'CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalents',
                                    'CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'CA304000TransactionSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'CA304000FinancialDetailsVoucherDetails' => 'CA304000FinancialDetailsVoucherDetails',
                                    'CA304000FinancialDetailsVoucherDetailsServiceCommands' => 'CA304000FinancialDetailsVoucherDetailsServiceCommands',
                                    'CA304000PrimaryKey' => 'CA304000PrimaryKey',
                                    'CA304000Clear' => 'CA304000Clear',
                                    'CA304000ClearResponse' => 'CA304000ClearResponse',
                                    'CA304000GetProcessStatus' => 'CA304000GetProcessStatus',
                                    'CA304000GetProcessStatusResponse' => 'CA304000GetProcessStatusResponse',
                                    'CA304000GetSchema' => 'CA304000GetSchema',
                                    'CA304000GetSchemaResponse' => 'CA304000GetSchemaResponse',
                                    'CA304000SetSchema' => 'CA304000SetSchema',
                                    'CA304000SetSchemaResponse' => 'CA304000SetSchemaResponse',
                                    'CA304000Export' => 'CA304000Export',
                                    'CA304000ExportResponse' => 'CA304000ExportResponse',
                                    'CA304000Import' => 'CA304000Import',
                                    'CA304000ImportResponse' => 'CA304000ImportResponse',
                                    'CA304000ImportResult' => 'CA304000ImportResult',
                                    'CA304000ArrayOfImportResult' => 'CA304000ArrayOfImportResult',
                                    'CA304000Submit' => 'CA304000Submit',
                                    'CA304000ArrayOfContent' => 'CA304000ArrayOfContent',
                                    'CA304000SubmitResponse' => 'CA304000SubmitResponse',
                                    'CR301000Content' => 'CR301000Content',
                                    'CR301000Actions' => 'CR301000Actions',
                                    'CR301000LeadSummary' => 'CR301000LeadSummary',
                                    'CR301000LeadSummaryServiceCommands' => 'CR301000LeadSummaryServiceCommands',
                                    'CR301000DetailsSummary' => 'CR301000DetailsSummary',
                                    'CR301000DetailsSummaryServiceCommands' => 'CR301000DetailsSummaryServiceCommands',
                                    'CR301000DetailsContact' => 'CR301000DetailsContact',
                                    'CR301000DetailsContactServiceCommands' => 'CR301000DetailsContactServiceCommands',
                                    'CR301000DetailsCRM' => 'CR301000DetailsCRM',
                                    'CR301000DetailsCRMServiceCommands' => 'CR301000DetailsCRMServiceCommands',
                                    'CR301000DetailsAddressSameAsInAccount' => 'CR301000DetailsAddressSameAsInAccount',
                                    'CR301000DetailsAddressSameAsInAccountServiceCommands' => 'CR301000DetailsAddressSameAsInAccountServiceCommands',
                                    'CR301000DetailsAddress' => 'CR301000DetailsAddress',
                                    'CR301000DetailsAddressServiceCommands' => 'CR301000DetailsAddressServiceCommands',
                                    'CR301000Attributes' => 'CR301000Attributes',
                                    'CR301000AttributesServiceCommands' => 'CR301000AttributesServiceCommands',
                                    'CR301000Activities' => 'CR301000Activities',
                                    'CR301000ActivitiesServiceCommands' => 'CR301000ActivitiesServiceCommands',
                                    'CR301000Relations' => 'CR301000Relations',
                                    'CR301000RelationsServiceCommands' => 'CR301000RelationsServiceCommands',
                                    'CR301000Campaigns' => 'CR301000Campaigns',
                                    'CR301000CampaignsServiceCommands' => 'CR301000CampaignsServiceCommands',
                                    'CR301000MarketingLists' => 'CR301000MarketingLists',
                                    'CR301000MarketingListsServiceCommands' => 'CR301000MarketingListsServiceCommands',
                                    'CR301000Duplicates' => 'CR301000Duplicates',
                                    'CR301000DuplicatesServiceCommands' => 'CR301000DuplicatesServiceCommands',
                                    'CR301000NewAccountServicesSettings' => 'CR301000NewAccountServicesSettings',
                                    'CR301000NewAccountServicesSettingsServiceCommands' => 'CR301000NewAccountServicesSettingsServiceCommands',
                                    'CR301000NewOpportunityServicesSettings' => 'CR301000NewOpportunityServicesSettings',
                                    'CR301000NewOpportunityServicesSettingsServiceCommands' => 'CR301000NewOpportunityServicesSettingsServiceCommands',
                                    'CR301000PleaseResolveTheConflictsContactID' => 'CR301000PleaseResolveTheConflictsContactID',
                                    'CR301000PleaseResolveTheConflictsContactIDServiceCommands' => 'CR301000PleaseResolveTheConflictsContactIDServiceCommands',
                                    'CR301000PleaseResolveTheConflicts' => 'CR301000PleaseResolveTheConflicts',
                                    'CR301000PleaseResolveTheConflictsServiceCommands' => 'CR301000PleaseResolveTheConflictsServiceCommands',
                                    'CR301000PrimaryKey' => 'CR301000PrimaryKey',
                                    'CR301000Clear' => 'CR301000Clear',
                                    'CR301000ClearResponse' => 'CR301000ClearResponse',
                                    'CR301000GetProcessStatus' => 'CR301000GetProcessStatus',
                                    'CR301000GetProcessStatusResponse' => 'CR301000GetProcessStatusResponse',
                                    'CR301000GetSchema' => 'CR301000GetSchema',
                                    'CR301000GetSchemaResponse' => 'CR301000GetSchemaResponse',
                                    'CR301000SetSchema' => 'CR301000SetSchema',
                                    'CR301000SetSchemaResponse' => 'CR301000SetSchemaResponse',
                                    'CR301000Export' => 'CR301000Export',
                                    'CR301000ExportResponse' => 'CR301000ExportResponse',
                                    'CR301000Import' => 'CR301000Import',
                                    'CR301000ImportResponse' => 'CR301000ImportResponse',
                                    'CR301000ImportResult' => 'CR301000ImportResult',
                                    'CR301000ArrayOfImportResult' => 'CR301000ArrayOfImportResult',
                                    'CR301000Submit' => 'CR301000Submit',
                                    'CR301000ArrayOfContent' => 'CR301000ArrayOfContent',
                                    'CR301000SubmitResponse' => 'CR301000SubmitResponse',
                                    'CR302000Content' => 'CR302000Content',
                                    'CR302000Actions' => 'CR302000Actions',
                                    'CR302000ContactSummary' => 'CR302000ContactSummary',
                                    'CR302000ContactSummaryServiceCommands' => 'CR302000ContactSummaryServiceCommands',
                                    'CR302000DetailsSummary' => 'CR302000DetailsSummary',
                                    'CR302000DetailsSummaryServiceCommands' => 'CR302000DetailsSummaryServiceCommands',
                                    'CR302000DetailsContact' => 'CR302000DetailsContact',
                                    'CR302000DetailsContactServiceCommands' => 'CR302000DetailsContactServiceCommands',
                                    'CR302000DetailsCRM' => 'CR302000DetailsCRM',
                                    'CR302000DetailsCRMServiceCommands' => 'CR302000DetailsCRMServiceCommands',
                                    'CR302000AdditionalInfoCommon' => 'CR302000AdditionalInfoCommon',
                                    'CR302000AdditionalInfoCommonServiceCommands' => 'CR302000AdditionalInfoCommonServiceCommands',
                                    'CR302000AdditionalInfoLeadHistory' => 'CR302000AdditionalInfoLeadHistory',
                                    'CR302000AdditionalInfoLeadHistoryServiceCommands' => 'CR302000AdditionalInfoLeadHistoryServiceCommands',
                                    'CR302000AdditionalInfoSynchronization' => 'CR302000AdditionalInfoSynchronization',
                                    'CR302000AdditionalInfoSynchronizationServiceCommands' => 'CR302000AdditionalInfoSynchronizationServiceCommands',
                                    'CR302000AdditionalInfoPhoto' => 'CR302000AdditionalInfoPhoto',
                                    'CR302000AdditionalInfoPhotoServiceCommands' => 'CR302000AdditionalInfoPhotoServiceCommands',
                                    'CR302000DetailsAddressSameAsInAccount' => 'CR302000DetailsAddressSameAsInAccount',
                                    'CR302000DetailsAddressSameAsInAccountServiceCommands' => 'CR302000DetailsAddressSameAsInAccountServiceCommands',
                                    'CR302000DetailsAddress' => 'CR302000DetailsAddress',
                                    'CR302000DetailsAddressServiceCommands' => 'CR302000DetailsAddressServiceCommands',
                                    'CR302000UserInfo' => 'CR302000UserInfo',
                                    'CR302000UserInfoServiceCommands' => 'CR302000UserInfoServiceCommands',
                                    'CR302000UserInfoChangePasswordResetPassword' => 'CR302000UserInfoChangePasswordResetPassword',
                                    'CR302000UserInfoChangePasswordResetPasswordServiceCommands' => 'CR302000UserInfoChangePasswordResetPasswordServiceCommands',
                                    'CR302000UserInfo_' => 'CR302000UserInfo_',
                                    'CR302000UserInfo_ServiceCommands' => 'CR302000UserInfo_ServiceCommands',
                                    'CR302000Attributes' => 'CR302000Attributes',
                                    'CR302000AttributesServiceCommands' => 'CR302000AttributesServiceCommands',
                                    'CR302000Activities' => 'CR302000Activities',
                                    'CR302000ActivitiesServiceCommands' => 'CR302000ActivitiesServiceCommands',
                                    'CR302000Relations' => 'CR302000Relations',
                                    'CR302000RelationsServiceCommands' => 'CR302000RelationsServiceCommands',
                                    'CR302000Opportunities' => 'CR302000Opportunities',
                                    'CR302000OpportunitiesServiceCommands' => 'CR302000OpportunitiesServiceCommands',
                                    'CR302000Cases' => 'CR302000Cases',
                                    'CR302000CasesServiceCommands' => 'CR302000CasesServiceCommands',
                                    'CR302000Campaigns' => 'CR302000Campaigns',
                                    'CR302000CampaignsServiceCommands' => 'CR302000CampaignsServiceCommands',
                                    'CR302000MarketingLists' => 'CR302000MarketingLists',
                                    'CR302000MarketingListsServiceCommands' => 'CR302000MarketingListsServiceCommands',
                                    'CR302000Notifications' => 'CR302000Notifications',
                                    'CR302000NotificationsServiceCommands' => 'CR302000NotificationsServiceCommands',
                                    'CR302000Duplicates' => 'CR302000Duplicates',
                                    'CR302000DuplicatesServiceCommands' => 'CR302000DuplicatesServiceCommands',
                                    'CR302000NewAccountServicesSettings' => 'CR302000NewAccountServicesSettings',
                                    'CR302000NewAccountServicesSettingsServiceCommands' => 'CR302000NewAccountServicesSettingsServiceCommands',
                                    'CR302000PleaseResolveTheConflictsContactID' => 'CR302000PleaseResolveTheConflictsContactID',
                                    'CR302000PleaseResolveTheConflictsContactIDServiceCommands' => 'CR302000PleaseResolveTheConflictsContactIDServiceCommands',
                                    'CR302000PleaseResolveTheConflicts' => 'CR302000PleaseResolveTheConflicts',
                                    'CR302000PleaseResolveTheConflictsServiceCommands' => 'CR302000PleaseResolveTheConflictsServiceCommands',
                                    'CR302000PrimaryKey' => 'CR302000PrimaryKey',
                                    'CR302000Clear' => 'CR302000Clear',
                                    'CR302000ClearResponse' => 'CR302000ClearResponse',
                                    'CR302000GetProcessStatus' => 'CR302000GetProcessStatus',
                                    'CR302000GetProcessStatusResponse' => 'CR302000GetProcessStatusResponse',
                                    'CR302000GetSchema' => 'CR302000GetSchema',
                                    'CR302000GetSchemaResponse' => 'CR302000GetSchemaResponse',
                                    'CR302000SetSchema' => 'CR302000SetSchema',
                                    'CR302000SetSchemaResponse' => 'CR302000SetSchemaResponse',
                                    'CR302000Export' => 'CR302000Export',
                                    'CR302000ExportResponse' => 'CR302000ExportResponse',
                                    'CR302000Import' => 'CR302000Import',
                                    'CR302000ImportResponse' => 'CR302000ImportResponse',
                                    'CR302000ImportResult' => 'CR302000ImportResult',
                                    'CR302000ArrayOfImportResult' => 'CR302000ArrayOfImportResult',
                                    'CR302000Submit' => 'CR302000Submit',
                                    'CR302000ArrayOfContent' => 'CR302000ArrayOfContent',
                                    'CR302000SubmitResponse' => 'CR302000SubmitResponse',
                                    'CR303000Content' => 'CR303000Content',
                                    'CR303000Actions' => 'CR303000Actions',
                                    'CR303000AccountSummary' => 'CR303000AccountSummary',
                                    'CR303000AccountSummaryServiceCommands' => 'CR303000AccountSummaryServiceCommands',
                                    'CR303000DetailsCRM' => 'CR303000DetailsCRM',
                                    'CR303000DetailsCRMServiceCommands' => 'CR303000DetailsCRMServiceCommands',
                                    'CR303000Locations' => 'CR303000Locations',
                                    'CR303000LocationsServiceCommands' => 'CR303000LocationsServiceCommands',
                                    'CR303000DeliverySettingsShippingContactSameAsMain' => 'CR303000DeliverySettingsShippingContactSameAsMain',
                                    'CR303000DeliverySettingsShippingContactSameAsMainServiceCommands' => 'CR303000DeliverySettingsShippingContactSameAsMainServiceCommands',
                                    'CR303000DeliverySettingsDefaultLocationSettings' => 'CR303000DeliverySettingsDefaultLocationSettings',
                                    'CR303000DeliverySettingsDefaultLocationSettingsServiceCommands' => 'CR303000DeliverySettingsDefaultLocationSettingsServiceCommands',
                                    'CR303000DeliverySettingsShippingInstructions' => 'CR303000DeliverySettingsShippingInstructions',
                                    'CR303000DeliverySettingsShippingInstructionsServiceCommands' => 'CR303000DeliverySettingsShippingInstructionsServiceCommands',
                                    'CR303000DeliverySettingsShippingAddressSameAsMain' => 'CR303000DeliverySettingsShippingAddressSameAsMain',
                                    'CR303000DeliverySettingsShippingAddressSameAsMainServiceCommands' => 'CR303000DeliverySettingsShippingAddressSameAsMainServiceCommands',
                                    'CR303000DetailsMainAddress' => 'CR303000DetailsMainAddress',
                                    'CR303000DetailsMainAddressServiceCommands' => 'CR303000DetailsMainAddressServiceCommands',
                                    'CR303000DeliverySettingsShippingAddress' => 'CR303000DeliverySettingsShippingAddress',
                                    'CR303000DeliverySettingsShippingAddressServiceCommands' => 'CR303000DeliverySettingsShippingAddressServiceCommands',
                                    'CR303000DetailsMainContact' => 'CR303000DetailsMainContact',
                                    'CR303000DetailsMainContactServiceCommands' => 'CR303000DetailsMainContactServiceCommands',
                                    'CR303000Contacts' => 'CR303000Contacts',
                                    'CR303000ContactsServiceCommands' => 'CR303000ContactsServiceCommands',
                                    'CR303000DeliverySettingsShippingContact' => 'CR303000DeliverySettingsShippingContact',
                                    'CR303000DeliverySettingsShippingContactServiceCommands' => 'CR303000DeliverySettingsShippingContactServiceCommands',
                                    'CR303000Attributes' => 'CR303000Attributes',
                                    'CR303000AttributesServiceCommands' => 'CR303000AttributesServiceCommands',
                                    'CR303000Activities' => 'CR303000Activities',
                                    'CR303000ActivitiesServiceCommands' => 'CR303000ActivitiesServiceCommands',
                                    'CR303000SelectContact' => 'CR303000SelectContact',
                                    'CR303000SelectContactServiceCommands' => 'CR303000SelectContactServiceCommands',
                                    'CR303000Opportunities' => 'CR303000Opportunities',
                                    'CR303000OpportunitiesServiceCommands' => 'CR303000OpportunitiesServiceCommands',
                                    'CR303000Relations' => 'CR303000Relations',
                                    'CR303000RelationsServiceCommands' => 'CR303000RelationsServiceCommands',
                                    'CR303000Cases' => 'CR303000Cases',
                                    'CR303000CasesServiceCommands' => 'CR303000CasesServiceCommands',
                                    'CR303000Contracts' => 'CR303000Contracts',
                                    'CR303000ContractsServiceCommands' => 'CR303000ContractsServiceCommands',
                                    'CR303000Orders' => 'CR303000Orders',
                                    'CR303000OrdersServiceCommands' => 'CR303000OrdersServiceCommands',
                                    'CR303000Campaigns' => 'CR303000Campaigns',
                                    'CR303000CampaignsServiceCommands' => 'CR303000CampaignsServiceCommands',
                                    'CR303000MarketingLists' => 'CR303000MarketingLists',
                                    'CR303000MarketingListsServiceCommands' => 'CR303000MarketingListsServiceCommands',
                                    'CR303000Duplicates' => 'CR303000Duplicates',
                                    'CR303000DuplicatesServiceCommands' => 'CR303000DuplicatesServiceCommands',
                                    'CR303000PleaseResolveTheConflictsBAccountID' => 'CR303000PleaseResolveTheConflictsBAccountID',
                                    'CR303000PleaseResolveTheConflictsBAccountIDServiceCommands' => 'CR303000PleaseResolveTheConflictsBAccountIDServiceCommands',
                                    'CR303000PleaseResolveTheConflicts' => 'CR303000PleaseResolveTheConflicts',
                                    'CR303000PleaseResolveTheConflictsServiceCommands' => 'CR303000PleaseResolveTheConflictsServiceCommands',
                                    'CR303000SpecifyNewID' => 'CR303000SpecifyNewID',
                                    'CR303000SpecifyNewIDServiceCommands' => 'CR303000SpecifyNewIDServiceCommands',
                                    'CR303000PrimaryKey' => 'CR303000PrimaryKey',
                                    'CR303000Clear' => 'CR303000Clear',
                                    'CR303000ClearResponse' => 'CR303000ClearResponse',
                                    'CR303000GetProcessStatus' => 'CR303000GetProcessStatus',
                                    'CR303000GetProcessStatusResponse' => 'CR303000GetProcessStatusResponse',
                                    'CR303000GetSchema' => 'CR303000GetSchema',
                                    'CR303000GetSchemaResponse' => 'CR303000GetSchemaResponse',
                                    'CR303000SetSchema' => 'CR303000SetSchema',
                                    'CR303000SetSchemaResponse' => 'CR303000SetSchemaResponse',
                                    'CR303000Export' => 'CR303000Export',
                                    'CR303000ExportResponse' => 'CR303000ExportResponse',
                                    'CR303000Import' => 'CR303000Import',
                                    'CR303000ImportResponse' => 'CR303000ImportResponse',
                                    'CR303000ImportResult' => 'CR303000ImportResult',
                                    'CR303000ArrayOfImportResult' => 'CR303000ArrayOfImportResult',
                                    'CR303000Submit' => 'CR303000Submit',
                                    'CR303000ArrayOfContent' => 'CR303000ArrayOfContent',
                                    'CR303000SubmitResponse' => 'CR303000SubmitResponse',
                                    'CR304000Content' => 'CR304000Content',
                                    'CR304000Actions' => 'CR304000Actions',
                                    'CR304000OpportunitySummary' => 'CR304000OpportunitySummary',
                                    'CR304000OpportunitySummaryServiceCommands' => 'CR304000OpportunitySummaryServiceCommands',
                                    'CR304000Details' => 'CR304000Details',
                                    'CR304000DetailsServiceCommands' => 'CR304000DetailsServiceCommands',
                                    'CR304000OpportunitySummaryRateSelection' => 'CR304000OpportunitySummaryRateSelection',
                                    'CR304000OpportunitySummaryRateSelectionServiceCommands' => 'CR304000OpportunitySummaryRateSelectionServiceCommands',
                                    'CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalents' => 'CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalents',
                                    'CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'CR304000OpportunitySummaryRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'CR304000DetailsProbability' => 'CR304000DetailsProbability',
                                    'CR304000DetailsProbabilityServiceCommands' => 'CR304000DetailsProbabilityServiceCommands',
                                    'CR304000Attributes' => 'CR304000Attributes',
                                    'CR304000AttributesServiceCommands' => 'CR304000AttributesServiceCommands',
                                    'CR304000Activities' => 'CR304000Activities',
                                    'CR304000ActivitiesServiceCommands' => 'CR304000ActivitiesServiceCommands',
                                    'CR304000Relations' => 'CR304000Relations',
                                    'CR304000RelationsServiceCommands' => 'CR304000RelationsServiceCommands',
                                    'CR304000Products' => 'CR304000Products',
                                    'CR304000ProductsServiceCommands' => 'CR304000ProductsServiceCommands',
                                    'CR304000TaxDetails' => 'CR304000TaxDetails',
                                    'CR304000TaxDetailsServiceCommands' => 'CR304000TaxDetailsServiceCommands',
                                    'CR304000CreateSalesOrder' => 'CR304000CreateSalesOrder',
                                    'CR304000CreateSalesOrderServiceCommands' => 'CR304000CreateSalesOrderServiceCommands',
                                    'CR304000NewAccountServicesSettings' => 'CR304000NewAccountServicesSettings',
                                    'CR304000NewAccountServicesSettingsServiceCommands' => 'CR304000NewAccountServicesSettingsServiceCommands',
                                    'CR304000PrimaryKey' => 'CR304000PrimaryKey',
                                    'CR304000Clear' => 'CR304000Clear',
                                    'CR304000ClearResponse' => 'CR304000ClearResponse',
                                    'CR304000GetProcessStatus' => 'CR304000GetProcessStatus',
                                    'CR304000GetProcessStatusResponse' => 'CR304000GetProcessStatusResponse',
                                    'CR304000GetSchema' => 'CR304000GetSchema',
                                    'CR304000GetSchemaResponse' => 'CR304000GetSchemaResponse',
                                    'CR304000SetSchema' => 'CR304000SetSchema',
                                    'CR304000SetSchemaResponse' => 'CR304000SetSchemaResponse',
                                    'CR304000Export' => 'CR304000Export',
                                    'CR304000ExportResponse' => 'CR304000ExportResponse',
                                    'CR304000Import' => 'CR304000Import',
                                    'CR304000ImportResponse' => 'CR304000ImportResponse',
                                    'CR304000ImportResult' => 'CR304000ImportResult',
                                    'CR304000ArrayOfImportResult' => 'CR304000ArrayOfImportResult',
                                    'CR304000Submit' => 'CR304000Submit',
                                    'CR304000ArrayOfContent' => 'CR304000ArrayOfContent',
                                    'CR304000SubmitResponse' => 'CR304000SubmitResponse',
                                    'GL301000Content' => 'GL301000Content',
                                    'GL301000Actions' => 'GL301000Actions',
                                    'GL301000BatchSummary' => 'GL301000BatchSummary',
                                    'GL301000BatchSummaryServiceCommands' => 'GL301000BatchSummaryServiceCommands',
                                    'GL301000BatchSummaryRateSelection' => 'GL301000BatchSummaryRateSelection',
                                    'GL301000BatchSummaryRateSelectionServiceCommands' => 'GL301000BatchSummaryRateSelectionServiceCommands',
                                    'GL301000BatchSummaryRateSelectionCurrencyUnitEquivalents' => 'GL301000BatchSummaryRateSelectionCurrencyUnitEquivalents',
                                    'GL301000BatchSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'GL301000BatchSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'GL301000TransactionDetails' => 'GL301000TransactionDetails',
                                    'GL301000TransactionDetailsServiceCommands' => 'GL301000TransactionDetailsServiceCommands',
                                    'GL301000BatchSummaryVoucherBatchNbr' => 'GL301000BatchSummaryVoucherBatchNbr',
                                    'GL301000BatchSummaryVoucherBatchNbrServiceCommands' => 'GL301000BatchSummaryVoucherBatchNbrServiceCommands',
                                    'GL301000PrimaryKey' => 'GL301000PrimaryKey',
                                    'GL301000Clear' => 'GL301000Clear',
                                    'GL301000ClearResponse' => 'GL301000ClearResponse',
                                    'GL301000GetProcessStatus' => 'GL301000GetProcessStatus',
                                    'GL301000GetProcessStatusResponse' => 'GL301000GetProcessStatusResponse',
                                    'GL301000GetSchema' => 'GL301000GetSchema',
                                    'GL301000GetSchemaResponse' => 'GL301000GetSchemaResponse',
                                    'GL301000SetSchema' => 'GL301000SetSchema',
                                    'GL301000SetSchemaResponse' => 'GL301000SetSchemaResponse',
                                    'GL301000Export' => 'GL301000Export',
                                    'GL301000ExportResponse' => 'GL301000ExportResponse',
                                    'GL301000Import' => 'GL301000Import',
                                    'GL301000ImportResponse' => 'GL301000ImportResponse',
                                    'GL301000ImportResult' => 'GL301000ImportResult',
                                    'GL301000ArrayOfImportResult' => 'GL301000ArrayOfImportResult',
                                    'GL301000Submit' => 'GL301000Submit',
                                    'GL301000ArrayOfContent' => 'GL301000ArrayOfContent',
                                    'GL301000SubmitResponse' => 'GL301000SubmitResponse',
                                    'IN202500Content' => 'IN202500Content',
                                    'IN202500Actions' => 'IN202500Actions',
                                    'IN202500StockItemSummary' => 'IN202500StockItemSummary',
                                    'IN202500StockItemSummaryServiceCommands' => 'IN202500StockItemSummaryServiceCommands',
                                    'IN202500GeneralSettingsItemDefaults' => 'IN202500GeneralSettingsItemDefaults',
                                    'IN202500GeneralSettingsItemDefaultsServiceCommands' => 'IN202500GeneralSettingsItemDefaultsServiceCommands',
                                    'IN202500GeneralSettingsWarehouseDefaults' => 'IN202500GeneralSettingsWarehouseDefaults',
                                    'IN202500GeneralSettingsWarehouseDefaultsServiceCommands' => 'IN202500GeneralSettingsWarehouseDefaultsServiceCommands',
                                    'IN202500GeneralSettingsUnitOfMeasureBaseUnit' => 'IN202500GeneralSettingsUnitOfMeasureBaseUnit',
                                    'IN202500GeneralSettingsUnitOfMeasureBaseUnitServiceCommands' => 'IN202500GeneralSettingsUnitOfMeasureBaseUnitServiceCommands',
                                    'IN202500GeneralSettingsPhysicalInventory' => 'IN202500GeneralSettingsPhysicalInventory',
                                    'IN202500GeneralSettingsPhysicalInventoryServiceCommands' => 'IN202500GeneralSettingsPhysicalInventoryServiceCommands',
                                    'IN202500PriceCostInfoPriceManagement' => 'IN202500PriceCostInfoPriceManagement',
                                    'IN202500PriceCostInfoPriceManagementServiceCommands' => 'IN202500PriceCostInfoPriceManagementServiceCommands',
                                    'IN202500PriceCostInfoStandardCost' => 'IN202500PriceCostInfoStandardCost',
                                    'IN202500PriceCostInfoStandardCostServiceCommands' => 'IN202500PriceCostInfoStandardCostServiceCommands',
                                    'IN202500Attributes' => 'IN202500Attributes',
                                    'IN202500AttributesServiceCommands' => 'IN202500AttributesServiceCommands',
                                    'IN202500PackagingDimensions' => 'IN202500PackagingDimensions',
                                    'IN202500PackagingDimensionsServiceCommands' => 'IN202500PackagingDimensionsServiceCommands',
                                    'IN202500PackagingAutomaticPackaging' => 'IN202500PackagingAutomaticPackaging',
                                    'IN202500PackagingAutomaticPackagingServiceCommands' => 'IN202500PackagingAutomaticPackagingServiceCommands',
                                    'IN202500GLAccounts' => 'IN202500GLAccounts',
                                    'IN202500GLAccountsServiceCommands' => 'IN202500GLAccountsServiceCommands',
                                    'IN202500Description' => 'IN202500Description',
                                    'IN202500DescriptionServiceCommands' => 'IN202500DescriptionServiceCommands',
                                    'IN202500DeferralSettingsRules' => 'IN202500DeferralSettingsRules',
                                    'IN202500DeferralSettingsRulesServiceCommands' => 'IN202500DeferralSettingsRulesServiceCommands',
                                    'IN202500Subitems' => 'IN202500Subitems',
                                    'IN202500SubitemsServiceCommands' => 'IN202500SubitemsServiceCommands',
                                    'IN202500PriceCostInfoCostStatistics' => 'IN202500PriceCostInfoCostStatistics',
                                    'IN202500PriceCostInfoCostStatisticsServiceCommands' => 'IN202500PriceCostInfoCostStatisticsServiceCommands',
                                    'IN202500GeneralSettingsUnitOfMeasure' => 'IN202500GeneralSettingsUnitOfMeasure',
                                    'IN202500GeneralSettingsUnitOfMeasureServiceCommands' => 'IN202500GeneralSettingsUnitOfMeasureServiceCommands',
                                    'IN202500WarehouseDetails' => 'IN202500WarehouseDetails',
                                    'IN202500WarehouseDetailsServiceCommands' => 'IN202500WarehouseDetailsServiceCommands',
                                    'IN202500CrossReference' => 'IN202500CrossReference',
                                    'IN202500CrossReferenceServiceCommands' => 'IN202500CrossReferenceServiceCommands',
                                    'IN202500ReplenishmentInfoReplenishmentParameters' => 'IN202500ReplenishmentInfoReplenishmentParameters',
                                    'IN202500ReplenishmentInfoReplenishmentParametersServiceCommands' => 'IN202500ReplenishmentInfoReplenishmentParametersServiceCommands',
                                    'IN202500ReplenishmentInfoSubitemReplenishmentParameters' => 'IN202500ReplenishmentInfoSubitemReplenishmentParameters',
                                    'IN202500ReplenishmentInfoSubitemReplenishmentParametersServiceCommands' => 'IN202500ReplenishmentInfoSubitemReplenishmentParametersServiceCommands',
                                    'IN202500VendorDetails' => 'IN202500VendorDetails',
                                    'IN202500VendorDetailsServiceCommands' => 'IN202500VendorDetailsServiceCommands',
                                    'IN202500PackagingAutomaticPackagingBoxes' => 'IN202500PackagingAutomaticPackagingBoxes',
                                    'IN202500PackagingAutomaticPackagingBoxesServiceCommands' => 'IN202500PackagingAutomaticPackagingBoxesServiceCommands',
                                    'IN202500AttributesAttributes' => 'IN202500AttributesAttributes',
                                    'IN202500AttributesAttributesServiceCommands' => 'IN202500AttributesAttributesServiceCommands',
                                    'IN202500AttributesSalesCategories' => 'IN202500AttributesSalesCategories',
                                    'IN202500AttributesSalesCategoriesServiceCommands' => 'IN202500AttributesSalesCategoriesServiceCommands',
                                    'IN202500RestrictionGroups' => 'IN202500RestrictionGroups',
                                    'IN202500RestrictionGroupsServiceCommands' => 'IN202500RestrictionGroupsServiceCommands',
                                    'IN202500SpecifyNewID' => 'IN202500SpecifyNewID',
                                    'IN202500SpecifyNewIDServiceCommands' => 'IN202500SpecifyNewIDServiceCommands',
                                    'IN202500PrimaryKey' => 'IN202500PrimaryKey',
                                    'IN202500Clear' => 'IN202500Clear',
                                    'IN202500ClearResponse' => 'IN202500ClearResponse',
                                    'IN202500GetProcessStatus' => 'IN202500GetProcessStatus',
                                    'IN202500GetProcessStatusResponse' => 'IN202500GetProcessStatusResponse',
                                    'IN202500GetSchema' => 'IN202500GetSchema',
                                    'IN202500GetSchemaResponse' => 'IN202500GetSchemaResponse',
                                    'IN202500SetSchema' => 'IN202500SetSchema',
                                    'IN202500SetSchemaResponse' => 'IN202500SetSchemaResponse',
                                    'IN202500Export' => 'IN202500Export',
                                    'IN202500ExportResponse' => 'IN202500ExportResponse',
                                    'IN202500Import' => 'IN202500Import',
                                    'IN202500ImportResponse' => 'IN202500ImportResponse',
                                    'IN202500ImportResult' => 'IN202500ImportResult',
                                    'IN202500ArrayOfImportResult' => 'IN202500ArrayOfImportResult',
                                    'IN202500Submit' => 'IN202500Submit',
                                    'IN202500ArrayOfContent' => 'IN202500ArrayOfContent',
                                    'IN202500SubmitResponse' => 'IN202500SubmitResponse',
                                    'IN204000Content' => 'IN204000Content',
                                    'IN204000Actions' => 'IN204000Actions',
                                    'IN204000WarehouseSummary' => 'IN204000WarehouseSummary',
                                    'IN204000WarehouseSummaryServiceCommands' => 'IN204000WarehouseSummaryServiceCommands',
                                    'IN204000LocationTable' => 'IN204000LocationTable',
                                    'IN204000LocationTableServiceCommands' => 'IN204000LocationTableServiceCommands',
                                    'IN204000GLAccounts' => 'IN204000GLAccounts',
                                    'IN204000GLAccountsServiceCommands' => 'IN204000GLAccountsServiceCommands',
                                    'IN204000LocationTableLocationTable' => 'IN204000LocationTableLocationTable',
                                    'IN204000LocationTableLocationTableServiceCommands' => 'IN204000LocationTableLocationTableServiceCommands',
                                    'IN204000AddressInformationAddressAddress' => 'IN204000AddressInformationAddressAddress',
                                    'IN204000AddressInformationAddressAddressServiceCommands' => 'IN204000AddressInformationAddressAddressServiceCommands',
                                    'IN204000AddressInformationContact' => 'IN204000AddressInformationContact',
                                    'IN204000AddressInformationContactServiceCommands' => 'IN204000AddressInformationContactServiceCommands',
                                    'IN204000SpecifyNewID' => 'IN204000SpecifyNewID',
                                    'IN204000SpecifyNewIDServiceCommands' => 'IN204000SpecifyNewIDServiceCommands',
                                    'IN204000PrimaryKey' => 'IN204000PrimaryKey',
                                    'IN204000Clear' => 'IN204000Clear',
                                    'IN204000ClearResponse' => 'IN204000ClearResponse',
                                    'IN204000GetProcessStatus' => 'IN204000GetProcessStatus',
                                    'IN204000GetProcessStatusResponse' => 'IN204000GetProcessStatusResponse',
                                    'IN204000GetSchema' => 'IN204000GetSchema',
                                    'IN204000GetSchemaResponse' => 'IN204000GetSchemaResponse',
                                    'IN204000SetSchema' => 'IN204000SetSchema',
                                    'IN204000SetSchemaResponse' => 'IN204000SetSchemaResponse',
                                    'IN204000Export' => 'IN204000Export',
                                    'IN204000ExportResponse' => 'IN204000ExportResponse',
                                    'IN204000Import' => 'IN204000Import',
                                    'IN204000ImportResponse' => 'IN204000ImportResponse',
                                    'IN204000ImportResult' => 'IN204000ImportResult',
                                    'IN204000ArrayOfImportResult' => 'IN204000ArrayOfImportResult',
                                    'IN204000Submit' => 'IN204000Submit',
                                    'IN204000ArrayOfContent' => 'IN204000ArrayOfContent',
                                    'IN204000SubmitResponse' => 'IN204000SubmitResponse',
                                    'IN304000Content' => 'IN304000Content',
                                    'IN304000Actions' => 'IN304000Actions',
                                    'IN304000DocumentSummary' => 'IN304000DocumentSummary',
                                    'IN304000DocumentSummaryServiceCommands' => 'IN304000DocumentSummaryServiceCommands',
                                    'IN304000FinancialDetails' => 'IN304000FinancialDetails',
                                    'IN304000FinancialDetailsServiceCommands' => 'IN304000FinancialDetailsServiceCommands',
                                    'IN304000TransactionDetails' => 'IN304000TransactionDetails',
                                    'IN304000TransactionDetailsServiceCommands' => 'IN304000TransactionDetailsServiceCommands',
                                    'IN304000Allocations' => 'IN304000Allocations',
                                    'IN304000AllocationsServiceCommands' => 'IN304000AllocationsServiceCommands',
                                    'IN304000InventoryLookupInventory' => 'IN304000InventoryLookupInventory',
                                    'IN304000InventoryLookupInventoryServiceCommands' => 'IN304000InventoryLookupInventoryServiceCommands',
                                    'IN304000InventoryLookup' => 'IN304000InventoryLookup',
                                    'IN304000InventoryLookupServiceCommands' => 'IN304000InventoryLookupServiceCommands',
                                    'IN304000AllocationsUnassignedQty' => 'IN304000AllocationsUnassignedQty',
                                    'IN304000AllocationsUnassignedQtyServiceCommands' => 'IN304000AllocationsUnassignedQtyServiceCommands',
                                    'IN304000PrimaryKey' => 'IN304000PrimaryKey',
                                    'IN304000Clear' => 'IN304000Clear',
                                    'IN304000ClearResponse' => 'IN304000ClearResponse',
                                    'IN304000GetProcessStatus' => 'IN304000GetProcessStatus',
                                    'IN304000GetProcessStatusResponse' => 'IN304000GetProcessStatusResponse',
                                    'IN304000GetSchema' => 'IN304000GetSchema',
                                    'IN304000GetSchemaResponse' => 'IN304000GetSchemaResponse',
                                    'IN304000SetSchema' => 'IN304000SetSchema',
                                    'IN304000SetSchemaResponse' => 'IN304000SetSchemaResponse',
                                    'IN304000Export' => 'IN304000Export',
                                    'IN304000ExportResponse' => 'IN304000ExportResponse',
                                    'IN304000Import' => 'IN304000Import',
                                    'IN304000ImportResponse' => 'IN304000ImportResponse',
                                    'IN304000ImportResult' => 'IN304000ImportResult',
                                    'IN304000ArrayOfImportResult' => 'IN304000ArrayOfImportResult',
                                    'IN304000Submit' => 'IN304000Submit',
                                    'IN304000ArrayOfContent' => 'IN304000ArrayOfContent',
                                    'IN304000SubmitResponse' => 'IN304000SubmitResponse',
                                    'PO302000Content' => 'PO302000Content',
                                    'PO302000Actions' => 'PO302000Actions',
                                    'PO302000DocumentSummary' => 'PO302000DocumentSummary',
                                    'PO302000DocumentSummaryServiceCommands' => 'PO302000DocumentSummaryServiceCommands',
                                    'PO302000FinancialDetailsBillingSettings' => 'PO302000FinancialDetailsBillingSettings',
                                    'PO302000FinancialDetailsBillingSettingsServiceCommands' => 'PO302000FinancialDetailsBillingSettingsServiceCommands',
                                    'PO302000FinancialDetailsTotals' => 'PO302000FinancialDetailsTotals',
                                    'PO302000FinancialDetailsTotalsServiceCommands' => 'PO302000FinancialDetailsTotalsServiceCommands',
                                    'PO302000FinancialDetailsAssignTo' => 'PO302000FinancialDetailsAssignTo',
                                    'PO302000FinancialDetailsAssignToServiceCommands' => 'PO302000FinancialDetailsAssignToServiceCommands',
                                    'PO302000DocumentDetails' => 'PO302000DocumentDetails',
                                    'PO302000DocumentDetailsServiceCommands' => 'PO302000DocumentDetailsServiceCommands',
                                    'PO302000Allocations' => 'PO302000Allocations',
                                    'PO302000AllocationsServiceCommands' => 'PO302000AllocationsServiceCommands',
                                    'PO302000DiscountDetails' => 'PO302000DiscountDetails',
                                    'PO302000DiscountDetailsServiceCommands' => 'PO302000DiscountDetailsServiceCommands',
                                    'PO302000TaxDetails' => 'PO302000TaxDetails',
                                    'PO302000TaxDetailsServiceCommands' => 'PO302000TaxDetailsServiceCommands',
                                    'PO302000LandedCosts' => 'PO302000LandedCosts',
                                    'PO302000LandedCostsServiceCommands' => 'PO302000LandedCostsServiceCommands',
                                    'PO302000DocumentSummaryRateSelection' => 'PO302000DocumentSummaryRateSelection',
                                    'PO302000DocumentSummaryRateSelectionServiceCommands' => 'PO302000DocumentSummaryRateSelectionServiceCommands',
                                    'PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalents' => 'PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalents',
                                    'PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'PO302000DocumentSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'PO302000LandedCostsRateSelection' => 'PO302000LandedCostsRateSelection',
                                    'PO302000LandedCostsRateSelectionServiceCommands' => 'PO302000LandedCostsRateSelectionServiceCommands',
                                    'PO302000LandedCostsRateSelectionCurrencyUnitEquivalents' => 'PO302000LandedCostsRateSelectionCurrencyUnitEquivalents',
                                    'PO302000LandedCostsRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'PO302000LandedCostsRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'PO302000LandedCostsCurrencySelection' => 'PO302000LandedCostsCurrencySelection',
                                    'PO302000LandedCostsCurrencySelectionServiceCommands' => 'PO302000LandedCostsCurrencySelectionServiceCommands',
                                    'PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalents' => 'PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalents',
                                    'PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalentsServiceCommands' => 'PO302000LandedCostsCurrencySelectionCurrencyUnitEquivalentsServiceCommands',
                                    'PO302000RecalculatePricesAndDiscounts' => 'PO302000RecalculatePricesAndDiscounts',
                                    'PO302000RecalculatePricesAndDiscountsServiceCommands' => 'PO302000RecalculatePricesAndDiscountsServiceCommands',
                                    'PO302000AddPurchaseOrderLinePOSelection' => 'PO302000AddPurchaseOrderLinePOSelection',
                                    'PO302000AddPurchaseOrderLinePOSelectionServiceCommands' => 'PO302000AddPurchaseOrderLinePOSelectionServiceCommands',
                                    'PO302000AddPurchaseOrderPOSelection' => 'PO302000AddPurchaseOrderPOSelection',
                                    'PO302000AddPurchaseOrderPOSelectionServiceCommands' => 'PO302000AddPurchaseOrderPOSelectionServiceCommands',
                                    'PO302000AddTransferOrderPOSelection' => 'PO302000AddTransferOrderPOSelection',
                                    'PO302000AddTransferOrderPOSelectionServiceCommands' => 'PO302000AddTransferOrderPOSelectionServiceCommands',
                                    'PO302000AddTransferLineTransferSelection' => 'PO302000AddTransferLineTransferSelection',
                                    'PO302000AddTransferLineTransferSelectionServiceCommands' => 'PO302000AddTransferLineTransferSelectionServiceCommands',
                                    'PO302000AddReceiptLine' => 'PO302000AddReceiptLine',
                                    'PO302000AddReceiptLineServiceCommands' => 'PO302000AddReceiptLineServiceCommands',
                                    'PO302000AddTransferLine' => 'PO302000AddTransferLine',
                                    'PO302000AddTransferLineServiceCommands' => 'PO302000AddTransferLineServiceCommands',
                                    'PO302000AddTransferOrder' => 'PO302000AddTransferOrder',
                                    'PO302000AddTransferOrderServiceCommands' => 'PO302000AddTransferOrderServiceCommands',
                                    'PO302000AllocationsUnassignedQty' => 'PO302000AllocationsUnassignedQty',
                                    'PO302000AllocationsUnassignedQtyServiceCommands' => 'PO302000AllocationsUnassignedQtyServiceCommands',
                                    'PO302000AddPurchaseOrderLine' => 'PO302000AddPurchaseOrderLine',
                                    'PO302000AddPurchaseOrderLineServiceCommands' => 'PO302000AddPurchaseOrderLineServiceCommands',
                                    'PO302000AddPurchaseOrder' => 'PO302000AddPurchaseOrder',
                                    'PO302000AddPurchaseOrderServiceCommands' => 'PO302000AddPurchaseOrderServiceCommands',
                                    'PO302000PrimaryKey' => 'PO302000PrimaryKey',
                                    'PO302000Clear' => 'PO302000Clear',
                                    'PO302000ClearResponse' => 'PO302000ClearResponse',
                                    'PO302000GetProcessStatus' => 'PO302000GetProcessStatus',
                                    'PO302000GetProcessStatusResponse' => 'PO302000GetProcessStatusResponse',
                                    'PO302000GetSchema' => 'PO302000GetSchema',
                                    'PO302000GetSchemaResponse' => 'PO302000GetSchemaResponse',
                                    'PO302000SetSchema' => 'PO302000SetSchema',
                                    'PO302000SetSchemaResponse' => 'PO302000SetSchemaResponse',
                                    'PO302000Export' => 'PO302000Export',
                                    'PO302000ExportResponse' => 'PO302000ExportResponse',
                                    'PO302000Import' => 'PO302000Import',
                                    'PO302000ImportResponse' => 'PO302000ImportResponse',
                                    'PO302000ImportResult' => 'PO302000ImportResult',
                                    'PO302000ArrayOfImportResult' => 'PO302000ArrayOfImportResult',
                                    'PO302000Submit' => 'PO302000Submit',
                                    'PO302000ArrayOfContent' => 'PO302000ArrayOfContent',
                                    'PO302000SubmitResponse' => 'PO302000SubmitResponse',
                                    'SO301000Content' => 'SO301000Content',
                                    'SO301000Actions' => 'SO301000Actions',
                                    'SO301000OrderSummary' => 'SO301000OrderSummary',
                                    'SO301000OrderSummaryServiceCommands' => 'SO301000OrderSummaryServiceCommands',
                                    'SO301000CommissionsDefaultSalesperson' => 'SO301000CommissionsDefaultSalesperson',
                                    'SO301000CommissionsDefaultSalespersonServiceCommands' => 'SO301000CommissionsDefaultSalespersonServiceCommands',
                                    'SO301000FinancialSettingsFinancialInformation' => 'SO301000FinancialSettingsFinancialInformation',
                                    'SO301000FinancialSettingsFinancialInformationServiceCommands' => 'SO301000FinancialSettingsFinancialInformationServiceCommands',
                                    'SO301000PaymentSettings' => 'SO301000PaymentSettings',
                                    'SO301000PaymentSettingsServiceCommands' => 'SO301000PaymentSettingsServiceCommands',
                                    'SO301000ShippingSettingsShippingInformation' => 'SO301000ShippingSettingsShippingInformation',
                                    'SO301000ShippingSettingsShippingInformationServiceCommands' => 'SO301000ShippingSettingsShippingInformationServiceCommands',
                                    'SO301000Totals' => 'SO301000Totals',
                                    'SO301000TotalsServiceCommands' => 'SO301000TotalsServiceCommands',
                                    'SO301000ShopForRatesServicesSettings' => 'SO301000ShopForRatesServicesSettings',
                                    'SO301000ShopForRatesServicesSettingsServiceCommands' => 'SO301000ShopForRatesServicesSettingsServiceCommands',
                                    'SO301000ShopForRatesServicesSettingsIsManualPackage' => 'SO301000ShopForRatesServicesSettingsIsManualPackage',
                                    'SO301000ShopForRatesServicesSettingsIsManualPackageServiceCommands' => 'SO301000ShopForRatesServicesSettingsIsManualPackageServiceCommands',
                                    'SO301000DocumentDetails' => 'SO301000DocumentDetails',
                                    'SO301000DocumentDetailsServiceCommands' => 'SO301000DocumentDetailsServiceCommands',
                                    'SO301000PurchasingDetailsPurchasingSettings' => 'SO301000PurchasingDetailsPurchasingSettings',
                                    'SO301000PurchasingDetailsPurchasingSettingsServiceCommands' => 'SO301000PurchasingDetailsPurchasingSettingsServiceCommands',
                                    'SO301000TaxDetails' => 'SO301000TaxDetails',
                                    'SO301000TaxDetailsServiceCommands' => 'SO301000TaxDetailsServiceCommands',
                                    'SO301000Shipments' => 'SO301000Shipments',
                                    'SO301000ShipmentsServiceCommands' => 'SO301000ShipmentsServiceCommands',
                                    'SO301000FinancialSettingsBillToInfo' => 'SO301000FinancialSettingsBillToInfo',
                                    'SO301000FinancialSettingsBillToInfoServiceCommands' => 'SO301000FinancialSettingsBillToInfoServiceCommands',
                                    'SO301000ShippingSettingsShipToInfo' => 'SO301000ShippingSettingsShipToInfo',
                                    'SO301000ShippingSettingsShipToInfoServiceCommands' => 'SO301000ShippingSettingsShipToInfoServiceCommands',
                                    'SO301000FinancialSettingsBillToInfoOverrideContact' => 'SO301000FinancialSettingsBillToInfoOverrideContact',
                                    'SO301000FinancialSettingsBillToInfoOverrideContactServiceCommands' => 'SO301000FinancialSettingsBillToInfoOverrideContactServiceCommands',
                                    'SO301000ShippingSettingsShipToInfoOverrideContact' => 'SO301000ShippingSettingsShipToInfoOverrideContact',
                                    'SO301000ShippingSettingsShipToInfoOverrideContactServiceCommands' => 'SO301000ShippingSettingsShipToInfoOverrideContactServiceCommands',
                                    'SO301000ApprovalDetails' => 'SO301000ApprovalDetails',
                                    'SO301000ApprovalDetailsServiceCommands' => 'SO301000ApprovalDetailsServiceCommands',
                                    'SO301000OrderSummaryRateSelection' => 'SO301000OrderSummaryRateSelection',
                                    'SO301000OrderSummaryRateSelectionServiceCommands' => 'SO301000OrderSummaryRateSelectionServiceCommands',
                                    'SO301000OrderSummaryRateSelectionCurrencyUnitEquivalents' => 'SO301000OrderSummaryRateSelectionCurrencyUnitEquivalents',
                                    'SO301000OrderSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'SO301000OrderSummaryRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'SO301000Allocations' => 'SO301000Allocations',
                                    'SO301000AllocationsServiceCommands' => 'SO301000AllocationsServiceCommands',
                                    'SO301000DiscountDetails' => 'SO301000DiscountDetails',
                                    'SO301000DiscountDetailsServiceCommands' => 'SO301000DiscountDetailsServiceCommands',
                                    'SO301000SpecifyShipmentParameters' => 'SO301000SpecifyShipmentParameters',
                                    'SO301000SpecifyShipmentParametersServiceCommands' => 'SO301000SpecifyShipmentParametersServiceCommands',
                                    'SO301000AddInvoiceDetailsDocType' => 'SO301000AddInvoiceDetailsDocType',
                                    'SO301000AddInvoiceDetailsDocTypeServiceCommands' => 'SO301000AddInvoiceDetailsDocTypeServiceCommands',
                                    'SO301000CopyTo' => 'SO301000CopyTo',
                                    'SO301000CopyToServiceCommands' => 'SO301000CopyToServiceCommands',
                                    'SO301000RecalculatePrices' => 'SO301000RecalculatePrices',
                                    'SO301000RecalculatePricesServiceCommands' => 'SO301000RecalculatePricesServiceCommands',
                                    'SO301000AddInvoiceDetails' => 'SO301000AddInvoiceDetails',
                                    'SO301000AddInvoiceDetailsServiceCommands' => 'SO301000AddInvoiceDetailsServiceCommands',
                                    'SO301000PurchasingDetails' => 'SO301000PurchasingDetails',
                                    'SO301000PurchasingDetailsServiceCommands' => 'SO301000PurchasingDetailsServiceCommands',
                                    'SO301000Commissions' => 'SO301000Commissions',
                                    'SO301000CommissionsServiceCommands' => 'SO301000CommissionsServiceCommands',
                                    'SO301000ShopForRatesPackages' => 'SO301000ShopForRatesPackages',
                                    'SO301000ShopForRatesPackagesServiceCommands' => 'SO301000ShopForRatesPackagesServiceCommands',
                                    'SO301000ShopForRatesCarrierRates' => 'SO301000ShopForRatesCarrierRates',
                                    'SO301000ShopForRatesCarrierRatesServiceCommands' => 'SO301000ShopForRatesCarrierRatesServiceCommands',
                                    'SO301000Payments' => 'SO301000Payments',
                                    'SO301000PaymentsServiceCommands' => 'SO301000PaymentsServiceCommands',
                                    'SO301000PaymentSettingsInputMode' => 'SO301000PaymentSettingsInputMode',
                                    'SO301000PaymentSettingsInputModeServiceCommands' => 'SO301000PaymentSettingsInputModeServiceCommands',
                                    'SO301000PaymentSettingsCardInfo' => 'SO301000PaymentSettingsCardInfo',
                                    'SO301000PaymentSettingsCardInfoServiceCommands' => 'SO301000PaymentSettingsCardInfoServiceCommands',
                                    'SO301000PaymentSettingsDescription' => 'SO301000PaymentSettingsDescription',
                                    'SO301000PaymentSettingsDescriptionServiceCommands' => 'SO301000PaymentSettingsDescriptionServiceCommands',
                                    'SO301000InventoryLookupInventory' => 'SO301000InventoryLookupInventory',
                                    'SO301000InventoryLookupInventoryServiceCommands' => 'SO301000InventoryLookupInventoryServiceCommands',
                                    'SO301000InventoryLookup' => 'SO301000InventoryLookup',
                                    'SO301000InventoryLookupServiceCommands' => 'SO301000InventoryLookupServiceCommands',
                                    'SO301000AllocationsUnassignedQty' => 'SO301000AllocationsUnassignedQty',
                                    'SO301000AllocationsUnassignedQtyServiceCommands' => 'SO301000AllocationsUnassignedQtyServiceCommands',
                                    'SO301000PrimaryKey' => 'SO301000PrimaryKey',
                                    'SO301000Clear' => 'SO301000Clear',
                                    'SO301000ClearResponse' => 'SO301000ClearResponse',
                                    'SO301000GetProcessStatus' => 'SO301000GetProcessStatus',
                                    'SO301000GetProcessStatusResponse' => 'SO301000GetProcessStatusResponse',
                                    'SO301000GetSchema' => 'SO301000GetSchema',
                                    'SO301000GetSchemaResponse' => 'SO301000GetSchemaResponse',
                                    'SO301000SetSchema' => 'SO301000SetSchema',
                                    'SO301000SetSchemaResponse' => 'SO301000SetSchemaResponse',
                                    'SO301000Export' => 'SO301000Export',
                                    'SO301000ExportResponse' => 'SO301000ExportResponse',
                                    'SO301000Import' => 'SO301000Import',
                                    'SO301000ImportResponse' => 'SO301000ImportResponse',
                                    'SO301000ImportResult' => 'SO301000ImportResult',
                                    'SO301000ArrayOfImportResult' => 'SO301000ArrayOfImportResult',
                                    'SO301000Submit' => 'SO301000Submit',
                                    'SO301000ArrayOfContent' => 'SO301000ArrayOfContent',
                                    'SO301000SubmitResponse' => 'SO301000SubmitResponse',
                                    'SO302000Content' => 'SO302000Content',
                                    'SO302000Actions' => 'SO302000Actions',
                                    'SO302000ShipmentSummary' => 'SO302000ShipmentSummary',
                                    'SO302000ShipmentSummaryServiceCommands' => 'SO302000ShipmentSummaryServiceCommands',
                                    'SO302000ShippingSettingsShippingInformation' => 'SO302000ShippingSettingsShippingInformation',
                                    'SO302000ShippingSettingsShippingInformationServiceCommands' => 'SO302000ShippingSettingsShippingInformationServiceCommands',
                                    'SO302000DocumentDetails' => 'SO302000DocumentDetails',
                                    'SO302000DocumentDetailsServiceCommands' => 'SO302000DocumentDetailsServiceCommands',
                                    'SO302000Allocations' => 'SO302000Allocations',
                                    'SO302000AllocationsServiceCommands' => 'SO302000AllocationsServiceCommands',
                                    'SO302000ShippingSettingsShipToInfo' => 'SO302000ShippingSettingsShipToInfo',
                                    'SO302000ShippingSettingsShipToInfoServiceCommands' => 'SO302000ShippingSettingsShipToInfoServiceCommands',
                                    'SO302000ShippingSettingsShipToInfoOverrideContact' => 'SO302000ShippingSettingsShipToInfoOverrideContact',
                                    'SO302000ShippingSettingsShipToInfoOverrideContactServiceCommands' => 'SO302000ShippingSettingsShipToInfoOverrideContactServiceCommands',
                                    'SO302000Orders' => 'SO302000Orders',
                                    'SO302000OrdersServiceCommands' => 'SO302000OrdersServiceCommands',
                                    'SO302000Packages' => 'SO302000Packages',
                                    'SO302000PackagesServiceCommands' => 'SO302000PackagesServiceCommands',
                                    'SO302000ShippingSettingsShippingInformationRateSelection' => 'SO302000ShippingSettingsShippingInformationRateSelection',
                                    'SO302000ShippingSettingsShippingInformationRateSelectionServiceCommands' => 'SO302000ShippingSettingsShippingInformationRateSelectionServiceCommands',
                                    'SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalents' => 'SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalents',
                                    'SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalentsServiceCommands' => 'SO302000ShippingSettingsShippingInformationRateSelectionCurrencyUnitEquivalentsServiceCommands',
                                    'SO302000AddSalesOrderOperation' => 'SO302000AddSalesOrderOperation',
                                    'SO302000AddSalesOrderOperationServiceCommands' => 'SO302000AddSalesOrderOperationServiceCommands',
                                    'SO302000AddSalesOrder' => 'SO302000AddSalesOrder',
                                    'SO302000AddSalesOrderServiceCommands' => 'SO302000AddSalesOrderServiceCommands',
                                    'SO302000AllocationsUnassignedQty' => 'SO302000AllocationsUnassignedQty',
                                    'SO302000AllocationsUnassignedQtyServiceCommands' => 'SO302000AllocationsUnassignedQtyServiceCommands',
                                    'SO302000PrimaryKey' => 'SO302000PrimaryKey',
                                    'SO302000Clear' => 'SO302000Clear',
                                    'SO302000ClearResponse' => 'SO302000ClearResponse',
                                    'SO302000GetProcessStatus' => 'SO302000GetProcessStatus',
                                    'SO302000GetProcessStatusResponse' => 'SO302000GetProcessStatusResponse',
                                    'SO302000GetSchema' => 'SO302000GetSchema',
                                    'SO302000GetSchemaResponse' => 'SO302000GetSchemaResponse',
                                    'SO302000SetSchema' => 'SO302000SetSchema',
                                    'SO302000SetSchemaResponse' => 'SO302000SetSchemaResponse',
                                    'SO302000Export' => 'SO302000Export',
                                    'SO302000ExportResponse' => 'SO302000ExportResponse',
                                    'SO302000Import' => 'SO302000Import',
                                    'SO302000ImportResponse' => 'SO302000ImportResponse',
                                    'SO302000ImportResult' => 'SO302000ImportResult',
                                    'SO302000ArrayOfImportResult' => 'SO302000ArrayOfImportResult',
                                    'SO302000Submit' => 'SO302000Submit',
                                    'SO302000ArrayOfContent' => 'SO302000ArrayOfContent',
                                    'SO302000SubmitResponse' => 'SO302000SubmitResponse',
                                   );

  public function Screen($wsdl = "apitest-dw.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *
   *
   * @param GetScenario $parameters
   * @return GetScenarioResponse
   */
  public function GetScenario(GetScenario $parameters) {
    return $this->__soapCall('GetScenario', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param Login $parameters
   * @return LoginResponse
   */
  public function Login(Login $parameters) {
    return $this->__soapCall('Login', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param Logout $parameters
   * @return LogoutResponse
   */
  public function Logout(Logout $parameters) {
    return $this->__soapCall('Logout', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SetBusinessDate $parameters
   * @return SetBusinessDateResponse
   */
  public function SetBusinessDate(SetBusinessDate $parameters) {
    return $this->__soapCall('SetBusinessDate', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SetLocaleName $parameters
   * @return SetLocaleNameResponse
   */
  public function SetLocaleName(SetLocaleName $parameters) {
    return $this->__soapCall('SetLocaleName', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SetSchemaMode $parameters
   * @return SetSchemaModeResponse
   */
  public function SetSchemaMode(SetSchemaMode $parameters) {
    return $this->__soapCall('SetSchemaMode', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000Clear $parameters
   * @return AR302000ClearResponse
   */
  public function AR302000Clear(AR302000Clear $parameters) {
    return $this->__soapCall('AR302000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000GetProcessStatus $parameters
   * @return AR302000GetProcessStatusResponse
   */
  public function AR302000GetProcessStatus(AR302000GetProcessStatus $parameters) {
    return $this->__soapCall('AR302000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000GetSchema $parameters
   * @return AR302000GetSchemaResponse
   */
  public function AR302000GetSchema(AR302000GetSchema $parameters) {
    return $this->__soapCall('AR302000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000SetSchema $parameters
   * @return AR302000SetSchemaResponse
   */
  public function AR302000SetSchema(AR302000SetSchema $parameters) {
    return $this->__soapCall('AR302000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000Export $parameters
   * @return AR302000ExportResponse
   */
  public function AR302000Export(AR302000Export $parameters) {
    return $this->__soapCall('AR302000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000Import $parameters
   * @return AR302000ImportResponse
   */
  public function AR302000Import(AR302000Import $parameters) {
    return $this->__soapCall('AR302000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR302000Submit $parameters
   * @return AR302000SubmitResponse
   */
  public function AR302000Submit(AR302000Submit $parameters) {
    return $this->__soapCall('AR302000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000Clear $parameters
   * @return AR303000ClearResponse
   */
  public function AR303000Clear(AR303000Clear $parameters) {
    return $this->__soapCall('AR303000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000GetProcessStatus $parameters
   * @return AR303000GetProcessStatusResponse
   */
  public function AR303000GetProcessStatus(AR303000GetProcessStatus $parameters) {
    return $this->__soapCall('AR303000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000GetSchema $parameters
   * @return AR303000GetSchemaResponse
   */
  public function AR303000GetSchema(AR303000GetSchema $parameters) {
    return $this->__soapCall('AR303000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000SetSchema $parameters
   * @return AR303000SetSchemaResponse
   */
  public function AR303000SetSchema(AR303000SetSchema $parameters) {
    return $this->__soapCall('AR303000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000Export $parameters
   * @return AR303000ExportResponse
   */
  public function AR303000Export(AR303000Export $parameters) {
    return $this->__soapCall('AR303000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000Import $parameters
   * @return AR303000ImportResponse
   */
  public function AR303000Import(AR303000Import $parameters) {
    return $this->__soapCall('AR303000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param AR303000Submit $parameters
   * @return AR303000SubmitResponse
   */
  public function AR303000Submit(AR303000Submit $parameters) {
    return $this->__soapCall('AR303000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000Clear $parameters
   * @return CA304000ClearResponse
   */
  public function CA304000Clear(CA304000Clear $parameters) {
    return $this->__soapCall('CA304000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000GetProcessStatus $parameters
   * @return CA304000GetProcessStatusResponse
   */
  public function CA304000GetProcessStatus(CA304000GetProcessStatus $parameters) {
    return $this->__soapCall('CA304000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000GetSchema $parameters
   * @return CA304000GetSchemaResponse
   */
  public function CA304000GetSchema(CA304000GetSchema $parameters) {
    return $this->__soapCall('CA304000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000SetSchema $parameters
   * @return CA304000SetSchemaResponse
   */
  public function CA304000SetSchema(CA304000SetSchema $parameters) {
    return $this->__soapCall('CA304000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000Export $parameters
   * @return CA304000ExportResponse
   */
  public function CA304000Export(CA304000Export $parameters) {
    return $this->__soapCall('CA304000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000Import $parameters
   * @return CA304000ImportResponse
   */
  public function CA304000Import(CA304000Import $parameters) {
    return $this->__soapCall('CA304000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CA304000Submit $parameters
   * @return CA304000SubmitResponse
   */
  public function CA304000Submit(CA304000Submit $parameters) {
    return $this->__soapCall('CA304000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000Clear $parameters
   * @return CR301000ClearResponse
   */
  public function CR301000Clear(CR301000Clear $parameters) {
    return $this->__soapCall('CR301000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000GetProcessStatus $parameters
   * @return CR301000GetProcessStatusResponse
   */
  public function CR301000GetProcessStatus(CR301000GetProcessStatus $parameters) {
    return $this->__soapCall('CR301000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000GetSchema $parameters
   * @return CR301000GetSchemaResponse
   */
  public function CR301000GetSchema(CR301000GetSchema $parameters) {
    return $this->__soapCall('CR301000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000SetSchema $parameters
   * @return CR301000SetSchemaResponse
   */
  public function CR301000SetSchema(CR301000SetSchema $parameters) {
    return $this->__soapCall('CR301000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000Export $parameters
   * @return CR301000ExportResponse
   */
  public function CR301000Export(CR301000Export $parameters) {
    return $this->__soapCall('CR301000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000Import $parameters
   * @return CR301000ImportResponse
   */
  public function CR301000Import(CR301000Import $parameters) {
    return $this->__soapCall('CR301000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR301000Submit $parameters
   * @return CR301000SubmitResponse
   */
  public function CR301000Submit(CR301000Submit $parameters) {
    return $this->__soapCall('CR301000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000Clear $parameters
   * @return CR302000ClearResponse
   */
  public function CR302000Clear(CR302000Clear $parameters) {
    return $this->__soapCall('CR302000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000GetProcessStatus $parameters
   * @return CR302000GetProcessStatusResponse
   */
  public function CR302000GetProcessStatus(CR302000GetProcessStatus $parameters) {
    return $this->__soapCall('CR302000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000GetSchema $parameters
   * @return CR302000GetSchemaResponse
   */
  public function CR302000GetSchema(CR302000GetSchema $parameters) {
    return $this->__soapCall('CR302000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000SetSchema $parameters
   * @return CR302000SetSchemaResponse
   */
  public function CR302000SetSchema(CR302000SetSchema $parameters) {
    return $this->__soapCall('CR302000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000Export $parameters
   * @return CR302000ExportResponse
   */
  public function CR302000Export(CR302000Export $parameters) {
    return $this->__soapCall('CR302000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000Import $parameters
   * @return CR302000ImportResponse
   */
  public function CR302000Import(CR302000Import $parameters) {
    return $this->__soapCall('CR302000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR302000Submit $parameters
   * @return CR302000SubmitResponse
   */
  public function CR302000Submit(CR302000Submit $parameters) {
    return $this->__soapCall('CR302000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000Clear $parameters
   * @return CR303000ClearResponse
   */
  public function CR303000Clear(CR303000Clear $parameters) {
    return $this->__soapCall('CR303000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000GetProcessStatus $parameters
   * @return CR303000GetProcessStatusResponse
   */
  public function CR303000GetProcessStatus(CR303000GetProcessStatus $parameters) {
    return $this->__soapCall('CR303000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000GetSchema $parameters
   * @return CR303000GetSchemaResponse
   */
  public function CR303000GetSchema(CR303000GetSchema $parameters) {
    return $this->__soapCall('CR303000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000SetSchema $parameters
   * @return CR303000SetSchemaResponse
   */
  public function CR303000SetSchema(CR303000SetSchema $parameters) {
    return $this->__soapCall('CR303000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000Export $parameters
   * @return CR303000ExportResponse
   */
  public function CR303000Export(CR303000Export $parameters) {
    return $this->__soapCall('CR303000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000Import $parameters
   * @return CR303000ImportResponse
   */
  public function CR303000Import(CR303000Import $parameters) {
    return $this->__soapCall('CR303000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR303000Submit $parameters
   * @return CR303000SubmitResponse
   */
  public function CR303000Submit(CR303000Submit $parameters) {
    return $this->__soapCall('CR303000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000Clear $parameters
   * @return CR304000ClearResponse
   */
  public function CR304000Clear(CR304000Clear $parameters) {
    return $this->__soapCall('CR304000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000GetProcessStatus $parameters
   * @return CR304000GetProcessStatusResponse
   */
  public function CR304000GetProcessStatus(CR304000GetProcessStatus $parameters) {
    return $this->__soapCall('CR304000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000GetSchema $parameters
   * @return CR304000GetSchemaResponse
   */
  public function CR304000GetSchema(CR304000GetSchema $parameters) {
    return $this->__soapCall('CR304000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000SetSchema $parameters
   * @return CR304000SetSchemaResponse
   */
  public function CR304000SetSchema(CR304000SetSchema $parameters) {
    return $this->__soapCall('CR304000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000Export $parameters
   * @return CR304000ExportResponse
   */
  public function CR304000Export(CR304000Export $parameters) {
    return $this->__soapCall('CR304000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000Import $parameters
   * @return CR304000ImportResponse
   */
  public function CR304000Import(CR304000Import $parameters) {
    return $this->__soapCall('CR304000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param CR304000Submit $parameters
   * @return CR304000SubmitResponse
   */
  public function CR304000Submit(CR304000Submit $parameters) {
    return $this->__soapCall('CR304000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000Clear $parameters
   * @return GL301000ClearResponse
   */
  public function GL301000Clear(GL301000Clear $parameters) {
    return $this->__soapCall('GL301000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000GetProcessStatus $parameters
   * @return GL301000GetProcessStatusResponse
   */
  public function GL301000GetProcessStatus(GL301000GetProcessStatus $parameters) {
    return $this->__soapCall('GL301000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000GetSchema $parameters
   * @return GL301000GetSchemaResponse
   */
  public function GL301000GetSchema(GL301000GetSchema $parameters) {
    return $this->__soapCall('GL301000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000SetSchema $parameters
   * @return GL301000SetSchemaResponse
   */
  public function GL301000SetSchema(GL301000SetSchema $parameters) {
    return $this->__soapCall('GL301000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000Export $parameters
   * @return GL301000ExportResponse
   */
  public function GL301000Export(GL301000Export $parameters) {
    return $this->__soapCall('GL301000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000Import $parameters
   * @return GL301000ImportResponse
   */
  public function GL301000Import(GL301000Import $parameters) {
    return $this->__soapCall('GL301000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param GL301000Submit $parameters
   * @return GL301000SubmitResponse
   */
  public function GL301000Submit(GL301000Submit $parameters) {
    return $this->__soapCall('GL301000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500Clear $parameters
   * @return IN202500ClearResponse
   */
  public function IN202500Clear(IN202500Clear $parameters) {
    return $this->__soapCall('IN202500Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500GetProcessStatus $parameters
   * @return IN202500GetProcessStatusResponse
   */
  public function IN202500GetProcessStatus(IN202500GetProcessStatus $parameters) {
    return $this->__soapCall('IN202500GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500GetSchema $parameters
   * @return IN202500GetSchemaResponse
   */
  public function IN202500GetSchema(IN202500GetSchema $parameters) {
    return $this->__soapCall('IN202500GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500SetSchema $parameters
   * @return IN202500SetSchemaResponse
   */
  public function IN202500SetSchema(IN202500SetSchema $parameters) {
    return $this->__soapCall('IN202500SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500Export $parameters
   * @return IN202500ExportResponse
   */
  public function IN202500Export(IN202500Export $parameters) {
    return $this->__soapCall('IN202500Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500Import $parameters
   * @return IN202500ImportResponse
   */
  public function IN202500Import(IN202500Import $parameters) {
    return $this->__soapCall('IN202500Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN202500Submit $parameters
   * @return IN202500SubmitResponse
   */
  public function IN202500Submit(IN202500Submit $parameters) {
    return $this->__soapCall('IN202500Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000Clear $parameters
   * @return IN204000ClearResponse
   */
  public function IN204000Clear(IN204000Clear $parameters) {
    return $this->__soapCall('IN204000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000GetProcessStatus $parameters
   * @return IN204000GetProcessStatusResponse
   */
  public function IN204000GetProcessStatus(IN204000GetProcessStatus $parameters) {
    return $this->__soapCall('IN204000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000GetSchema $parameters
   * @return IN204000GetSchemaResponse
   */
  public function IN204000GetSchema(IN204000GetSchema $parameters) {
    return $this->__soapCall('IN204000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000SetSchema $parameters
   * @return IN204000SetSchemaResponse
   */
  public function IN204000SetSchema(IN204000SetSchema $parameters) {
    return $this->__soapCall('IN204000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000Export $parameters
   * @return IN204000ExportResponse
   */
  public function IN204000Export(IN204000Export $parameters) {
    return $this->__soapCall('IN204000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000Import $parameters
   * @return IN204000ImportResponse
   */
  public function IN204000Import(IN204000Import $parameters) {
    return $this->__soapCall('IN204000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN204000Submit $parameters
   * @return IN204000SubmitResponse
   */
  public function IN204000Submit(IN204000Submit $parameters) {
    return $this->__soapCall('IN204000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000Clear $parameters
   * @return IN304000ClearResponse
   */
  public function IN304000Clear(IN304000Clear $parameters) {
    return $this->__soapCall('IN304000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000GetProcessStatus $parameters
   * @return IN304000GetProcessStatusResponse
   */
  public function IN304000GetProcessStatus(IN304000GetProcessStatus $parameters) {
    return $this->__soapCall('IN304000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000GetSchema $parameters
   * @return IN304000GetSchemaResponse
   */
  public function IN304000GetSchema(IN304000GetSchema $parameters) {
    return $this->__soapCall('IN304000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000SetSchema $parameters
   * @return IN304000SetSchemaResponse
   */
  public function IN304000SetSchema(IN304000SetSchema $parameters) {
    return $this->__soapCall('IN304000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000Export $parameters
   * @return IN304000ExportResponse
   */
  public function IN304000Export(IN304000Export $parameters) {
    return $this->__soapCall('IN304000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000Import $parameters
   * @return IN304000ImportResponse
   */
  public function IN304000Import(IN304000Import $parameters) {
    return $this->__soapCall('IN304000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param IN304000Submit $parameters
   * @return IN304000SubmitResponse
   */
  public function IN304000Submit(IN304000Submit $parameters) {
    return $this->__soapCall('IN304000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000Clear $parameters
   * @return PO302000ClearResponse
   */
  public function PO302000Clear(PO302000Clear $parameters) {
    return $this->__soapCall('PO302000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000GetProcessStatus $parameters
   * @return PO302000GetProcessStatusResponse
   */
  public function PO302000GetProcessStatus(PO302000GetProcessStatus $parameters) {
    return $this->__soapCall('PO302000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000GetSchema $parameters
   * @return PO302000GetSchemaResponse
   */
  public function PO302000GetSchema(PO302000GetSchema $parameters) {
    return $this->__soapCall('PO302000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000SetSchema $parameters
   * @return PO302000SetSchemaResponse
   */
  public function PO302000SetSchema(PO302000SetSchema $parameters) {
    return $this->__soapCall('PO302000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000Export $parameters
   * @return PO302000ExportResponse
   */
  public function PO302000Export(PO302000Export $parameters) {
    return $this->__soapCall('PO302000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000Import $parameters
   * @return PO302000ImportResponse
   */
  public function PO302000Import(PO302000Import $parameters) {
    return $this->__soapCall('PO302000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param PO302000Submit $parameters
   * @return PO302000SubmitResponse
   */
  public function PO302000Submit(PO302000Submit $parameters) {
    return $this->__soapCall('PO302000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000Clear $parameters
   * @return SO301000ClearResponse
   */
  public function SO301000Clear(SO301000Clear $parameters) {
    return $this->__soapCall('SO301000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000GetProcessStatus $parameters
   * @return SO301000GetProcessStatusResponse
   */
  public function SO301000GetProcessStatus(SO301000GetProcessStatus $parameters) {
    return $this->__soapCall('SO301000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000GetSchema $parameters
   * @return SO301000GetSchemaResponse
   */
  public function SO301000GetSchema(SO301000GetSchema $parameters) {
    return $this->__soapCall('SO301000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000SetSchema $parameters
   * @return SO301000SetSchemaResponse
   */
  public function SO301000SetSchema(SO301000SetSchema $parameters) {
    return $this->__soapCall('SO301000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000Export $parameters
   * @return SO301000ExportResponse
   */
  public function SO301000Export(SO301000Export $parameters) {
    return $this->__soapCall('SO301000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000Import $parameters
   * @return SO301000ImportResponse
   */
  public function SO301000Import(SO301000Import $parameters) {
    return $this->__soapCall('SO301000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO301000Submit $parameters
   * @return SO301000SubmitResponse
   */
  public function SO301000Submit(SO301000Submit $parameters) {
    return $this->__soapCall('SO301000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000Clear $parameters
   * @return SO302000ClearResponse
   */
  public function SO302000Clear(SO302000Clear $parameters) {
    return $this->__soapCall('SO302000Clear', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000GetProcessStatus $parameters
   * @return SO302000GetProcessStatusResponse
   */
  public function SO302000GetProcessStatus(SO302000GetProcessStatus $parameters) {
    return $this->__soapCall('SO302000GetProcessStatus', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000GetSchema $parameters
   * @return SO302000GetSchemaResponse
   */
  public function SO302000GetSchema(SO302000GetSchema $parameters) {
    return $this->__soapCall('SO302000GetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000SetSchema $parameters
   * @return SO302000SetSchemaResponse
   */
  public function SO302000SetSchema(SO302000SetSchema $parameters) {
    return $this->__soapCall('SO302000SetSchema', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000Export $parameters
   * @return SO302000ExportResponse
   */
  public function SO302000Export(SO302000Export $parameters) {
    return $this->__soapCall('SO302000Export', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000Import $parameters
   * @return SO302000ImportResponse
   */
  public function SO302000Import(SO302000Import $parameters) {
    return $this->__soapCall('SO302000Import', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param SO302000Submit $parameters
   * @return SO302000SubmitResponse
   */
  public function SO302000Submit(SO302000Submit $parameters) {
    return $this->__soapCall('SO302000Submit', array($parameters),       array(
            'uri' => 'http://www.acumatica.com/generic/',
            'soapaction' => ''
           )
      );
  }

}
