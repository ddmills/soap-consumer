<?php

class DefaultEndpoint extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Login' => '\\Login',
      'LoginResponse' => '\\LoginResponse',
      'Logout' => '\\Logout',
      'LogoutResponse' => '\\LogoutResponse',
      'SetBusinessDate' => '\\SetBusinessDate',
      'SetBusinessDateResponse' => '\\SetBusinessDateResponse',
      'GetProcessStatus' => '\\GetProcessStatus',
      'InvokeResult' => '\\InvokeResult',
      'GetProcessStatusResponse' => '\\GetProcessStatusResponse',
      'ProcessResult' => '\\ProcessResult',
      'GetList' => '\\GetList',
      'Entity' => '\\Entity',
      'LongValue' => '\\LongValue',
      'LongSearch' => '\\LongSearch',
      'ArrayOfCustomField' => '\\ArrayOfCustomField',
      'CustomField' => '\\CustomField',
      'CustomDateTimeField' => '\\CustomDateTimeField',
      'DateTimeValue' => '\\DateTimeValue',
      'DateTimeSearch' => '\\DateTimeSearch',
      'CustomDoubleField' => '\\CustomDoubleField',
      'DoubleValue' => '\\DoubleValue',
      'DoubleSearch' => '\\DoubleSearch',
      'CustomByteField' => '\\CustomByteField',
      'ByteValue' => '\\ByteValue',
      'ByteSearch' => '\\ByteSearch',
      'CustomBooleanField' => '\\CustomBooleanField',
      'BooleanValue' => '\\BooleanValue',
      'BooleanSearch' => '\\BooleanSearch',
      'CustomLongField' => '\\CustomLongField',
      'CustomShortField' => '\\CustomShortField',
      'ShortValue' => '\\ShortValue',
      'CustomDecimalField' => '\\CustomDecimalField',
      'DecimalValue' => '\\DecimalValue',
      'DecimalSearch' => '\\DecimalSearch',
      'CustomIntField' => '\\CustomIntField',
      'IntValue' => '\\IntValue',
      'IntSearch' => '\\IntSearch',
      'CustomStringField' => '\\CustomStringField',
      'StringValue' => '\\StringValue',
      'StringSearch' => '\\StringSearch',
      'GetListResponse' => '\\GetListResponse',
      'ArrayOfEntity' => '\\ArrayOfEntity',
      'Get' => '\\Get',
      'GetResponse' => '\\GetResponse',
      'SanityCheck' => '\\SanityCheck',
      'SanityCheckResponse' => '\\SanityCheckResponse',
      'Put' => '\\Put',
      'PutResponse' => '\\PutResponse',
      'Delete' => '\\Delete',
      'DeleteResponse' => '\\DeleteResponse',
      'Invoke' => '\\Invoke',
      'Action' => '\\Action',
      'InvokeResponse' => '\\InvokeResponse',
      'GetFiles' => '\\GetFiles',
      'GetFilesResponse' => '\\GetFilesResponse',
      'ArrayOfFile' => '\\ArrayOfFile',
      'File' => '\\FileCustom',
      'PutFiles' => '\\PutFiles',
      'PutFilesResponse' => '\\PutFilesResponse',
      'GetSchema' => '\\GetSchema',
      'GetSchemaResponse' => '\\GetSchemaResponse',
      'PutSchema' => '\\PutSchema',
      'PutSchemaResponse' => '\\PutSchemaResponse',
      'GuidValue' => '\\GuidValue',
      'ShortSearch' => '\\ShortSearch',
      'Warehouse' => '\\Warehouse',
      'Locations' => '\\Locations',
      'WarehouseLocation' => '\\WarehouseLocation',
      'LotSerialClass' => '\\LotSerialClass',
      'ShipVia' => '\\ShipVia',
      'Packages' => '\\Packages',
      'ShippingBox' => '\\ShippingBox',
      'StockItem' => '\\StockItem',
      'Attributes' => '\\Attributes',
      'CrossReferences' => '\\CrossReferences',
      'UOMConversions' => '\\UOMConversions',
      'VendorDetails' => '\\VendorDetails',
      'WarehouseDetails' => '\\WarehouseDetails',
      'InventoryItemUOMConversion' => '\\InventoryItemUOMConversion',
      'InventoryAllocationInquiry' => '\\InventoryAllocationInquiry',
      'InventorySummaryInquiry' => '\\InventorySummaryInquiry',
      'Results' => '\\Results',
      'InventorySummaryRow' => '\\InventorySummaryRow',
      'TransferOrder' => '\\TransferOrder',
      'Details' => '\\Details',
      'ReleaseTransferOrder' => '\\ReleaseTransferOrder',
      'TransferOrderDetail' => '\\TransferOrderDetail',
      'Allocations' => '\\Allocations',
      'PurchaseOrder' => '\\PurchaseOrder',
      'PurchaseOrderDetail' => '\\PurchaseOrderDetail',
      'SalesOrder' => '\\SalesOrder',
      'Shipments' => '\\Shipments',
      'SalesOrderShipment' => '\\SalesOrderShipment',
      'SalesOrderDetail' => '\\SalesOrderDetail',
      'TransferOrderDetailAllocation' => '\\TransferOrderDetailAllocation',
      'Shipment' => '\\Shipment',
      'ConfirmShipment' => '\\ConfirmShipment',
      'ShipmentDetail' => '\\ShipmentDetail',
      'ShipmentDetailAllocation' => '\\ShipmentDetailAllocation',
      'Contact' => '\\Contact',
      'Address' => '\\Address',
      'ShipmentPackage' => '\\ShipmentPackage',
      'ItemSalesCategory' => '\\ItemSalesCategory',
      'Members' => '\\Members',
      'Customer' => '\\Customer',
      'Contacts' => '\\Contacts',
      'AttributeDefinition' => '\\AttributeDefinition',
      'Values' => '\\Values',
      'AttributeDefinitionValue' => '\\AttributeDefinitionValue',
      'CustomerPaymentMethod' => '\\CustomerPaymentMethod',
      'CustomerPaymentMethodDetail' => '\\CustomerPaymentMethodDetail',
      'CurrencyRateHistoryInquiry' => '\\CurrencyRateHistoryInquiry',
      'CurrencyRateHistoryRow' => '\\CurrencyRateHistoryRow',
      'Employee' => '\\Employee',
      'EmployeeCost' => '\\EmployeeCost',
      'EmploymentHistory' => '\\EmploymentHistory',
      'EmploymentHistoryRecord' => '\\EmploymentHistoryRecord',
      'EmployeeCostRecord' => '\\EmployeeCostRecord',
      'JournalTransaction' => '\\JournalTransaction',
      'ReleaseJournalTransaction' => '\\ReleaseJournalTransaction',
      'JournalTransactionDetail' => '\\JournalTransactionDetail',
      'ItemSalesCategoryMember' => '\\ItemSalesCategoryMember',
      'StockItemVendorDetail' => '\\StockItemVendorDetail',
      'StockItemWarehouseDetail' => '\\StockItemWarehouseDetail',
      'InventoryItemCrossReference' => '\\InventoryItemCrossReference',
      'NonStockItem' => '\\NonStockItem',
      'NonStockItemVendorDetail' => '\\NonStockItemVendorDetail',
      'ItemClass' => '\\ItemClass',
      'KitSpecification' => '\\KitSpecification',
      'NonStockComponents' => '\\NonStockComponents',
      'StockComponents' => '\\StockComponents',
      'KitStockComponent' => '\\KitStockComponent',
      'KitNonStockComponent' => '\\KitNonStockComponent',
      'PurchaseReceipt' => '\\PurchaseReceipt',
      'ReleasePurchaseReceipt' => '\\ReleasePurchaseReceipt',
      'PurchaseReceiptDetail' => '\\PurchaseReceiptDetail',
      'SalesOrderDetailAllocation' => '\\SalesOrderDetailAllocation',
      'Adjustment' => '\\Adjustment',
      'AdjustmentDetail' => '\\AdjustmentDetail',
      'KitAssembly' => '\\KitAssembly',
      'KitAssemblyStockComponent' => '\\KitAssemblyStockComponent',
      'KitAssemblyNonStockComponent' => '\\KitAssemblyNonStockComponent',
      'KitAssemblyAllocation' => '\\KitAssemblyAllocation',
      'PhysicalInventoryReview' => '\\PhysicalInventoryReview',
      'CancelPhysicalInventory' => '\\CancelPhysicalInventory',
      'CompletePhysicalInventory' => '\\CompletePhysicalInventory',
      'FinishCountingPhysicalInventory' => '\\FinishCountingPhysicalInventory',
      'PhysicalInventoryReviewDetail' => '\\PhysicalInventoryReviewDetail',
      'SalesInvoice' => '\\SalesInvoice',
      'ReleaseSalesInvoice' => '\\ReleaseSalesInvoice',
      'SalesInvoiceDetail' => '\\SalesInvoiceDetail',
      'Payment' => '\\Payment',
      'CreditCardProcessingInfo' => '\\CreditCardProcessingInfo',
      'DocumentsToApply' => '\\DocumentsToApply',
      'OrdersToApply' => '\\OrdersToApply',
      'CaptureCreditCardPayment' => '\\CaptureCreditCardPayment',
      'ReleasePayment' => '\\ReleasePayment',
      'PaymentDetail' => '\\PaymentDetail',
      'CreditCardProcessingDetail' => '\\CreditCardProcessingDetail',
      'CustomerContact' => '\\CustomerContact',
      'ItemClassAtrribute' => '\\ItemClassAtrribute',
      'AttributeValue' => '\\AttributeValue',
      'PaymentOrder' => '\\PaymentOrder',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://acumatica.senecatank.com/Seneca/(W(3))/entity/Default/5.30.001?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param Login $parameters
     * @return LoginResponse
     */
    public function Login(Login $parameters)
    {
      return $this->__soapCall('Login', array($parameters));
    }

    /**
     * @param Logout $parameters
     * @return LogoutResponse
     */
    public function Logout(Logout $parameters)
    {
      return $this->__soapCall('Logout', array($parameters));
    }

    /**
     * @param SetBusinessDate $parameters
     * @return SetBusinessDateResponse
     */
    public function SetBusinessDate(SetBusinessDate $parameters)
    {
      return $this->__soapCall('SetBusinessDate', array($parameters));
    }

    /**
     * @param GetProcessStatus $parameters
     * @return GetProcessStatusResponse
     */
    public function GetProcessStatus(GetProcessStatus $parameters)
    {
      return $this->__soapCall('GetProcessStatus', array($parameters));
    }

    /**
     * @param GetList $parameters
     * @return GetListResponse
     */
    public function GetList(GetList $parameters)
    {
      return $this->__soapCall('GetList', array($parameters));
    }

    /**
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
      return $this->__soapCall('Get', array($parameters));
    }

    /**
     * @param SanityCheck $parameters
     * @return SanityCheckResponse
     */
    public function SanityCheck(SanityCheck $parameters)
    {
      return $this->__soapCall('SanityCheck', array($parameters));
    }

    /**
     * @param Put $parameters
     * @return PutResponse
     */
    public function Put(Put $parameters)
    {
      return $this->__soapCall('Put', array($parameters));
    }

    /**
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * @param Invoke $parameters
     * @return InvokeResponse
     */
    public function Invoke(Invoke $parameters)
    {
      return $this->__soapCall('Invoke', array($parameters));
    }

    /**
     * @param GetFiles $parameters
     * @return GetFilesResponse
     */
    public function GetFiles(GetFiles $parameters)
    {
      return $this->__soapCall('GetFiles', array($parameters));
    }

    /**
     * @param PutFiles $parameters
     * @return PutFilesResponse
     */
    public function PutFiles(PutFiles $parameters)
    {
      return $this->__soapCall('PutFiles', array($parameters));
    }

    /**
     * @param GetSchema $parameters
     * @return GetSchemaResponse
     */
    public function GetSchema(GetSchema $parameters)
    {
      return $this->__soapCall('GetSchema', array($parameters));
    }

    /**
     * @param PutSchema $parameters
     * @return PutSchemaResponse
     */
    public function PutSchema(PutSchema $parameters)
    {
      return $this->__soapCall('PutSchema', array($parameters));
    }

}
