<?php
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
                                   );

  public function Screen($wsdl = "https://acumatica.senecatank.com/Seneca/Soap/CONTACTS.asmx?WSDL", $options = array()) {
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

}

?>
