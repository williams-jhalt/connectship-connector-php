<?php

namespace Williams\ConnectShip;

class AMPServices extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Commitment' => 'Williams\\ConnectShip\\Commitment',
      'Dimensions' => 'Williams\\ConnectShip\\Dimensions',
      'Group' => 'Williams\\ConnectShip\\Group',
      'Identity' => 'Williams\\ConnectShip\\Identity',
      'Money' => 'Williams\\ConnectShip\\Money',
      'HazmatQuantity' => 'Williams\\ConnectShip\\HazmatQuantity',
      'NameAddress' => 'Williams\\ConnectShip\\NameAddress',
      'PrintArea' => 'Williams\\ConnectShip\\PrintArea',
      'ShipperInformation' => 'Williams\\ConnectShip\\ShipperInformation',
      'PrintAreaList' => 'Williams\\ConnectShip\\PrintAreaList',
      'StockDescriptor' => 'Williams\\ConnectShip\\StockDescriptor',
      'Volume' => 'Williams\\ConnectShip\\Volume',
      'Weight' => 'Williams\\ConnectShip\\Weight',
      'Holiday' => 'Williams\\ConnectShip\\Holiday',
      'CollectionBase' => 'Williams\\ConnectShip\\CollectionBase',
      'List' => 'Williams\\ConnectShip\\ListCustom',
      'DictionaryItem' => 'Williams\\ConnectShip\\DictionaryItem',
      'Dictionary' => 'Williams\\ConnectShip\\Dictionary',
      'StringList' => 'Williams\\ConnectShip\\StringList',
      'IntegerList' => 'Williams\\ConnectShip\\IntegerList',
      'IdentityList' => 'Williams\\ConnectShip\\IdentityList',
      'DataDictionaryList' => 'Williams\\ConnectShip\\DataDictionaryList',
      'Commodity' => 'Williams\\ConnectShip\\Commodity',
      'CommodityList' => 'Williams\\ConnectShip\\CommodityList',
      'HazmatItem' => 'Williams\\ConnectShip\\HazmatItem',
      'HazmatItemList' => 'Williams\\ConnectShip\\HazmatItemList',
      'AlcoholItem' => 'Williams\\ConnectShip\\AlcoholItem',
      'AlcoholItemList' => 'Williams\\ConnectShip\\AlcoholItemList',
      'DataDictionary' => 'Williams\\ConnectShip\\DataDictionary',
      'Result' => 'Williams\\ConnectShip\\Result',
      'IdentityListResult' => 'Williams\\ConnectShip\\IdentityListResult',
      'GroupResult' => 'Williams\\ConnectShip\\GroupResult',
      'ShipperResult' => 'Williams\\ConnectShip\\ShipperResult',
      'StringResult' => 'Williams\\ConnectShip\\StringResult',
      'BooleanResult' => 'Williams\\ConnectShip\\BooleanResult',
      'IdentityResult' => 'Williams\\ConnectShip\\IdentityResult',
      'DictionaryResult' => 'Williams\\ConnectShip\\DictionaryResult',
      'PackageResult' => 'Williams\\ConnectShip\\PackageResult',
      'PackageResultList' => 'Williams\\ConnectShip\\PackageResultList',
      'ProcessResult' => 'Williams\\ConnectShip\\ProcessResult',
      'ProcessResultList' => 'Williams\\ConnectShip\\ProcessResultList',
      'RateResult' => 'Williams\\ConnectShip\\RateResult',
      'ImageItemList' => 'Williams\\ConnectShip\\ImageItemList',
      'DocumentOutput' => 'Williams\\ConnectShip\\DocumentOutput',
      'PrintItem' => 'Williams\\ConnectShip\\PrintItem',
      'DocumentResult' => 'Williams\\ConnectShip\\DocumentResult',
      'DocumentResultList' => 'Williams\\ConnectShip\\DocumentResultList',
      'PrintResult' => 'Williams\\ConnectShip\\PrintResult',
      'VoidPackageResult' => 'Williams\\ConnectShip\\VoidPackageResult',
      'VoidPackageResultList' => 'Williams\\ConnectShip\\VoidPackageResultList',
      'VoidResult' => 'Williams\\ConnectShip\\VoidResult',
      'SearchPackageResult' => 'Williams\\ConnectShip\\SearchPackageResult',
      'SearchPackageResultList' => 'Williams\\ConnectShip\\SearchPackageResultList',
      'SearchResult' => 'Williams\\ConnectShip\\SearchResult',
      'ShipFile' => 'Williams\\ConnectShip\\ShipFile',
      'TransmitItem' => 'Williams\\ConnectShip\\TransmitItem',
      'TransmitItemList' => 'Williams\\ConnectShip\\TransmitItemList',
      'CloseOutResult' => 'Williams\\ConnectShip\\CloseOutResult',
      'TransmitItemResult' => 'Williams\\ConnectShip\\TransmitItemResult',
      'TransmitItemResultList' => 'Williams\\ConnectShip\\TransmitItemResultList',
      'TransmitResult' => 'Williams\\ConnectShip\\TransmitResult',
      'ModifyPackageResult' => 'Williams\\ConnectShip\\ModifyPackageResult',
      'ModifyPackageResultList' => 'Williams\\ConnectShip\\ModifyPackageResultList',
      'ModifyPackagesResult' => 'Williams\\ConnectShip\\ModifyPackagesResult',
      'CandidateAddress' => 'Williams\\ConnectShip\\CandidateAddress',
      'CandidateAddressList' => 'Williams\\ConnectShip\\CandidateAddressList',
      'ValidateResult' => 'Williams\\ConnectShip\\ValidateResult',
      'StockDescriptorList' => 'Williams\\ConnectShip\\StockDescriptorList',
      'ListStocksResult' => 'Williams\\ConnectShip\\ListStocksResult',
      'GroupList' => 'Williams\\ConnectShip\\GroupList',
      'ListGroupsResult' => 'Williams\\ConnectShip\\ListGroupsResult',
      'ListTransmitItemsResult' => 'Williams\\ConnectShip\\ListTransmitItemsResult',
      'ShipFileList' => 'Williams\\ConnectShip\\ShipFileList',
      'ListShipFilesResult' => 'Williams\\ConnectShip\\ListShipFilesResult',
      'StringListResult' => 'Williams\\ConnectShip\\StringListResult',
      'HolidayItem' => 'Williams\\ConnectShip\\HolidayItem',
      'HolidayDictionary' => 'Williams\\ConnectShip\\HolidayDictionary',
      'HolidayList' => 'Williams\\ConnectShip\\HolidayList',
      'ListHolidaysResult' => 'Williams\\ConnectShip\\ListHolidaysResult',
      'CloseOutRequest' => 'Williams\\ConnectShip\\CloseOutRequest',
      'CloseOutResponse' => 'Williams\\ConnectShip\\CloseOutResponse',
      'CreateGroupRequest' => 'Williams\\ConnectShip\\CreateGroupRequest',
      'CreateGroupResponse' => 'Williams\\ConnectShip\\CreateGroupResponse',
      'CustomOperationRequest' => 'Williams\\ConnectShip\\CustomOperationRequest',
      'CustomOperationResponse' => 'Williams\\ConnectShip\\CustomOperationResponse',
      'DeleteShipFilesRequest' => 'Williams\\ConnectShip\\DeleteShipFilesRequest',
      'DeleteShipFilesResponse' => 'Williams\\ConnectShip\\DeleteShipFilesResponse',
      'DeleteTransmitItemsRequest' => 'Williams\\ConnectShip\\DeleteTransmitItemsRequest',
      'DeleteTransmitItemsResponse' => 'Williams\\ConnectShip\\DeleteTransmitItemsResponse',
      'GetGroupRequest' => 'Williams\\ConnectShip\\GetGroupRequest',
      'GetGroupResponse' => 'Williams\\ConnectShip\\GetGroupResponse',
      'GetSchemaRequest' => 'Williams\\ConnectShip\\GetSchemaRequest',
      'GetSchemaResponse' => 'Williams\\ConnectShip\\GetSchemaResponse',
      'GetShipperInformationRequest' => 'Williams\\ConnectShip\\GetShipperInformationRequest',
      'GetShipperInformationResponse' => 'Williams\\ConnectShip\\GetShipperInformationResponse',
      'ListCarriersRequest' => 'Williams\\ConnectShip\\ListCarriersRequest',
      'ListCarriersResponse' => 'Williams\\ConnectShip\\ListCarriersResponse',
      'ListCloseOutItemsRequest' => 'Williams\\ConnectShip\\ListCloseOutItemsRequest',
      'ListCloseOutItemsResponse' => 'Williams\\ConnectShip\\ListCloseOutItemsResponse',
      'ListCountriesRequest' => 'Williams\\ConnectShip\\ListCountriesRequest',
      'ListCountriesResponse' => 'Williams\\ConnectShip\\ListCountriesResponse',
      'ListCountryServicesRequest' => 'Williams\\ConnectShip\\ListCountryServicesRequest',
      'ListCountryServicesResponse' => 'Williams\\ConnectShip\\ListCountryServicesResponse',
      'ListCurrenciesRequest' => 'Williams\\ConnectShip\\ListCurrenciesRequest',
      'ListCurrenciesResponse' => 'Williams\\ConnectShip\\ListCurrenciesResponse',
      'ListDocumentFormatsRequest' => 'Williams\\ConnectShip\\ListDocumentFormatsRequest',
      'ListDocumentFormatsResponse' => 'Williams\\ConnectShip\\ListDocumentFormatsResponse',
      'ListDocumentsRequest' => 'Williams\\ConnectShip\\ListDocumentsRequest',
      'ListDocumentsResponse' => 'Williams\\ConnectShip\\ListDocumentsResponse',
      'ListGroupingsRequest' => 'Williams\\ConnectShip\\ListGroupingsRequest',
      'ListGroupingsResponse' => 'Williams\\ConnectShip\\ListGroupingsResponse',
      'ListGroupsRequest' => 'Williams\\ConnectShip\\ListGroupsRequest',
      'ListGroupsResponse' => 'Williams\\ConnectShip\\ListGroupsResponse',
      'ListIncotermsRequest' => 'Williams\\ConnectShip\\ListIncotermsRequest',
      'ListIncotermsResponse' => 'Williams\\ConnectShip\\ListIncotermsResponse',
      'ListLocalPortsRequest' => 'Williams\\ConnectShip\\ListLocalPortsRequest',
      'ListLocalPortsResponse' => 'Williams\\ConnectShip\\ListLocalPortsResponse',
      'ListPackagingTypesRequest' => 'Williams\\ConnectShip\\ListPackagingTypesRequest',
      'ListPackagingTypesResponse' => 'Williams\\ConnectShip\\ListPackagingTypesResponse',
      'ListPaymentTypesRequest' => 'Williams\\ConnectShip\\ListPaymentTypesRequest',
      'ListPaymentTypesResponse' => 'Williams\\ConnectShip\\ListPaymentTypesResponse',
      'ListPrinterDevicesRequest' => 'Williams\\ConnectShip\\ListPrinterDevicesRequest',
      'ListPrinterDevicesResponse' => 'Williams\\ConnectShip\\ListPrinterDevicesResponse',
      'ListServicesRequest' => 'Williams\\ConnectShip\\ListServicesRequest',
      'ListServicesResponse' => 'Williams\\ConnectShip\\ListServicesResponse',
      'ListShipFilesRequest' => 'Williams\\ConnectShip\\ListShipFilesRequest',
      'ListShipFilesResponse' => 'Williams\\ConnectShip\\ListShipFilesResponse',
      'ListShippersRequest' => 'Williams\\ConnectShip\\ListShippersRequest',
      'ListShippersResponse' => 'Williams\\ConnectShip\\ListShippersResponse',
      'ListStocksRequest' => 'Williams\\ConnectShip\\ListStocksRequest',
      'ListStocksResponse' => 'Williams\\ConnectShip\\ListStocksResponse',
      'ListTransmitItemsRequest' => 'Williams\\ConnectShip\\ListTransmitItemsRequest',
      'ListTransmitItemsResponse' => 'Williams\\ConnectShip\\ListTransmitItemsResponse',
      'ListUnitsRequest' => 'Williams\\ConnectShip\\ListUnitsRequest',
      'ListUnitsResponse' => 'Williams\\ConnectShip\\ListUnitsResponse',
      'ListWindowsPrintersRequest' => 'Williams\\ConnectShip\\ListWindowsPrintersRequest',
      'ListWindowsPrintersResponse' => 'Williams\\ConnectShip\\ListWindowsPrintersResponse',
      'ModifyContainerRequest' => 'Williams\\ConnectShip\\ModifyContainerRequest',
      'ModifyContainerResponse' => 'Williams\\ConnectShip\\ModifyContainerResponse',
      'ModifyGroupRequest' => 'Williams\\ConnectShip\\ModifyGroupRequest',
      'ModifyGroupResponse' => 'Williams\\ConnectShip\\ModifyGroupResponse',
      'ModifyPackagesRequest' => 'Williams\\ConnectShip\\ModifyPackagesRequest',
      'ModifyPackagesResponse' => 'Williams\\ConnectShip\\ModifyPackagesResponse',
      'PrintItemList' => 'Williams\\ConnectShip\\PrintItemList',
      'PrintRequest' => 'Williams\\ConnectShip\\PrintRequest',
      'PrintResponse' => 'Williams\\ConnectShip\\PrintResponse',
      'PrintXmlRequest' => 'Williams\\ConnectShip\\PrintXmlRequest',
      'PrintXmlResponse' => 'Williams\\ConnectShip\\PrintXmlResponse',
      'ServiceList' => 'Williams\\ConnectShip\\ServiceList',
      'RateRequest' => 'Williams\\ConnectShip\\RateRequest',
      'RateResponse' => 'Williams\\ConnectShip\\RateResponse',
      'ReprocessRequest' => 'Williams\\ConnectShip\\ReprocessRequest',
      'ReprocessResponse' => 'Williams\\ConnectShip\\ReprocessResponse',
      'SearchRequest' => 'Williams\\ConnectShip\\SearchRequest',
      'SearchResponse' => 'Williams\\ConnectShip\\SearchResponse',
      'ShipRequest' => 'Williams\\ConnectShip\\ShipRequest',
      'ShipResponse' => 'Williams\\ConnectShip\\ShipResponse',
      'TransmitRequest' => 'Williams\\ConnectShip\\TransmitRequest',
      'TransmitResponse' => 'Williams\\ConnectShip\\TransmitResponse',
      'ValidateAddressRequest' => 'Williams\\ConnectShip\\ValidateAddressRequest',
      'ValidateAddressResponse' => 'Williams\\ConnectShip\\ValidateAddressResponse',
      'VoidPackagesRequest' => 'Williams\\ConnectShip\\VoidPackagesRequest',
      'VoidPackagesResponse' => 'Williams\\ConnectShip\\VoidPackagesResponse',
      'ErrorResponse' => 'Williams\\ConnectShip\\ErrorResponse',
      'CompoundOperation' => 'Williams\\ConnectShip\\CompoundOperation',
      'CompoundResult' => 'Williams\\ConnectShip\\CompoundResult',
      'AddHolidayRequest' => 'Williams\\ConnectShip\\AddHolidayRequest',
      'AddHolidayResponse' => 'Williams\\ConnectShip\\AddHolidayResponse',
      'AddShipperRequest' => 'Williams\\ConnectShip\\AddShipperRequest',
      'AddShipperResponse' => 'Williams\\ConnectShip\\AddShipperResponse',
      'DeleteHolidayRequest' => 'Williams\\ConnectShip\\DeleteHolidayRequest',
      'DeleteHolidayResponse' => 'Williams\\ConnectShip\\DeleteHolidayResponse',
      'DeleteShipperRequest' => 'Williams\\ConnectShip\\DeleteShipperRequest',
      'DeleteShipperResponse' => 'Williams\\ConnectShip\\DeleteShipperResponse',
      'ExecuteHookRequest' => 'Williams\\ConnectShip\\ExecuteHookRequest',
      'ExecuteHookResponse' => 'Williams\\ConnectShip\\ExecuteHookResponse',
      'GetCategoryPropertyRequest' => 'Williams\\ConnectShip\\GetCategoryPropertyRequest',
      'GetCategoryPropertyResponse' => 'Williams\\ConnectShip\\GetCategoryPropertyResponse',
      'GetCategoryShipperErrorStatusRequest' => 'Williams\\ConnectShip\\GetCategoryShipperErrorStatusRequest',
      'GetCategoryShipperErrorStatusResponse' => 'Williams\\ConnectShip\\GetCategoryShipperErrorStatusResponse',
      'GetComponentConfigurationAssemblyRequest' => 'Williams\\ConnectShip\\GetComponentConfigurationAssemblyRequest',
      'GetComponentConfigurationAssemblyResponse' => 'Williams\\ConnectShip\\GetComponentConfigurationAssemblyResponse',
      'GetHolidaysRequest' => 'Williams\\ConnectShip\\GetHolidaysRequest',
      'GetHolidaysResponse' => 'Williams\\ConnectShip\\GetHolidaysResponse',
      'GetHooksSchemaRequest' => 'Williams\\ConnectShip\\GetHooksSchemaRequest',
      'GetHooksSchemaResponse' => 'Williams\\ConnectShip\\GetHooksSchemaResponse',
      'GetServerErrorStatusRequest' => 'Williams\\ConnectShip\\GetServerErrorStatusRequest',
      'GetServerErrorStatusResponse' => 'Williams\\ConnectShip\\GetServerErrorStatusResponse',
      'GetShipperConfigDataRequest' => 'Williams\\ConnectShip\\GetShipperConfigDataRequest',
      'GetShipperConfigDataResponse' => 'Williams\\ConnectShip\\GetShipperConfigDataResponse',
      'GetShipperConfigSchemaRequest' => 'Williams\\ConnectShip\\GetShipperConfigSchemaRequest',
      'GetShipperConfigSchemaResponse' => 'Williams\\ConnectShip\\GetShipperConfigSchemaResponse',
      'GetShipperControlDataRequest' => 'Williams\\ConnectShip\\GetShipperControlDataRequest',
      'GetShipperControlDataResponse' => 'Williams\\ConnectShip\\GetShipperControlDataResponse',
      'GetShipperControlSchemaRequest' => 'Williams\\ConnectShip\\GetShipperControlSchemaRequest',
      'GetShipperControlSchemaResponse' => 'Williams\\ConnectShip\\GetShipperControlSchemaResponse',
      'GetShipperErrorStatusRequest' => 'Williams\\ConnectShip\\GetShipperErrorStatusRequest',
      'GetShipperErrorStatusResponse' => 'Williams\\ConnectShip\\GetShipperErrorStatusResponse',
      'ListServersRequest' => 'Williams\\ConnectShip\\ListServersRequest',
      'ListServersResponse' => 'Williams\\ConnectShip\\ListServersResponse',
      'RegisterShipperRequest' => 'Williams\\ConnectShip\\RegisterShipperRequest',
      'RegisterShipperResponse' => 'Williams\\ConnectShip\\RegisterShipperResponse',
      'SetShipperAbbreviationRequest' => 'Williams\\ConnectShip\\SetShipperAbbreviationRequest',
      'SetShipperAbbreviationResponse' => 'Williams\\ConnectShip\\SetShipperAbbreviationResponse',
      'SetShipperConfigInfoRequest' => 'Williams\\ConnectShip\\SetShipperConfigInfoRequest',
      'SetShipperConfigInfoResponse' => 'Williams\\ConnectShip\\SetShipperConfigInfoResponse',
      'SetShipperControlInfoRequest' => 'Williams\\ConnectShip\\SetShipperControlInfoRequest',
      'SetShipperControlInfoResponse' => 'Williams\\ConnectShip\\SetShipperControlInfoResponse',
      'SetShipperNameAddressRequest' => 'Williams\\ConnectShip\\SetShipperNameAddressRequest',
      'SetShipperNameAddressResponse' => 'Williams\\ConnectShip\\SetShipperNameAddressResponse',
      'UnRegisterShipperRequest' => 'Williams\\ConnectShip\\UnRegisterShipperRequest',
      'UnRegisterShipperResponse' => 'Williams\\ConnectShip\\UnRegisterShipperResponse',
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
        $wsdl = 'http://wt-cs/amp/wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Closes out a group of shipped packages.
     *
     * @param CloseOutRequest $body
     * @return void
     */
    public function CloseOut(CloseOutRequest $body)
    {
      return $this->__soapCall('CloseOut', array($body));
    }

    /**
     * Creates a new group using the specified data.
     *
     * @param CreateGroupRequest $body
     * @return void
     */
    public function CreateGroup(CreateGroupRequest $body)
    {
      return $this->__soapCall('CreateGroup', array($body));
    }

    /**
     * Performs a custom operation using the specified data.
     *
     * @param CustomOperationRequest $body
     * @return void
     */
    public function CustomOperation(CustomOperationRequest $body)
    {
      return $this->__soapCall('CustomOperation', array($body));
    }

    /**
     * Deletes a list of ship file items.
     *
     * @param DeleteShipFilesRequest $body
     * @return void
     */
    public function DeleteShipFiles(DeleteShipFilesRequest $body)
    {
      return $this->__soapCall('DeleteShipFiles', array($body));
    }

    /**
     * Deletes a list of transmit items.
     *
     * @param DeleteTransmitItemsRequest $body
     * @return void
     */
    public function DeleteTransmitItems(DeleteTransmitItemsRequest $body)
    {
      return $this->__soapCall('DeleteTransmitItems', array($body));
    }

    /**
     * Gets the detailed information about a group.
     *
     * @param GetGroupRequest $body
     * @return void
     */
    public function GetGroup(GetGroupRequest $body)
    {
      return $this->__soapCall('GetGroup', array($body));
    }

    /**
     * Gets the current AMP message XML schema.
     *
     * @param GetSchemaRequest $body
     * @return void
     */
    public function GetSchema(GetSchemaRequest $body)
    {
      return $this->__soapCall('GetSchema', array($body));
    }

    /**
     * Gets the detailed information about a shipper.
     *
     * @param GetShipperInformationRequest $body
     * @return void
     */
    public function GetShipperInformation(GetShipperInformationRequest $body)
    {
      return $this->__soapCall('GetShipperInformation', array($body));
    }

    /**
     * Gets the list of available carriers.
     *
     * @param ListCarriersRequest $body
     * @return void
     */
    public function ListCarriers(ListCarriersRequest $body)
    {
      return $this->__soapCall('ListCarriers', array($body));
    }

    /**
     * Gets the list of available close out items.
     *
     * @param ListCloseOutItemsRequest $body
     * @return void
     */
    public function ListCloseOutItems(ListCloseOutItemsRequest $body)
    {
      return $this->__soapCall('ListCloseOutItems', array($body));
    }

    /**
     * Gets the list of available countries.
     *
     * @param ListCountriesRequest $body
     * @return void
     */
    public function ListCountries(ListCountriesRequest $body)
    {
      return $this->__soapCall('ListCountries', array($body));
    }

    /**
     * Gets the list of services for a country.
     *
     * @param ListCountryServicesRequest $body
     * @return void
     */
    public function ListCountryServices(ListCountryServicesRequest $body)
    {
      return $this->__soapCall('ListCountryServices', array($body));
    }

    /**
     * Gets the list of available currencies.
     *
     * @param ListCurrenciesRequest $body
     * @return void
     */
    public function ListCurrencies(ListCurrenciesRequest $body)
    {
      return $this->__soapCall('ListCurrencies', array($body));
    }

    /**
     * Gets the list of available documents.
     *
     * @param ListDocumentsRequest $body
     * @return void
     */
    public function ListDocuments(ListDocumentsRequest $body)
    {
      return $this->__soapCall('ListDocuments', array($body));
    }

    /**
     * Gets the list of available formats for a document.
     *
     * @param ListDocumentFormatsRequest $body
     * @return void
     */
    public function ListDocumentFormats(ListDocumentFormatsRequest $body)
    {
      return $this->__soapCall('ListDocumentFormats', array($body));
    }

    /**
     * Gets the list of supported groupings for a carrier.
     *
     * @param ListGroupingsRequest $body
     * @return void
     */
    public function ListGroupings(ListGroupingsRequest $body)
    {
      return $this->__soapCall('ListGroupings', array($body));
    }

    /**
     * Gets the list of available groups for a grouping.
     *
     * @param ListGroupsRequest $body
     * @return void
     */
    public function ListGroups(ListGroupsRequest $body)
    {
      return $this->__soapCall('ListGroups', array($body));
    }

    /**
     * Gets the list of available Incoterms.
     *
     * @param ListIncotermsRequest $body
     * @return void
     */
    public function ListIncoterms(ListIncotermsRequest $body)
    {
      return $this->__soapCall('ListIncoterms', array($body));
    }

    /**
     * Gets the list of local printer ports.
     *
     * @param ListLocalPortsRequest $body
     * @return void
     */
    public function ListLocalPorts(ListLocalPortsRequest $body)
    {
      return $this->__soapCall('ListLocalPorts', array($body));
    }

    /**
     * Gets the list of available packaging types.
     *
     * @param ListPackagingTypesRequest $body
     * @return void
     */
    public function ListPackagingTypes(ListPackagingTypesRequest $body)
    {
      return $this->__soapCall('ListPackagingTypes', array($body));
    }

    /**
     * Gets the list of available payment types.
     *
     * @param ListPaymentTypesRequest $body
     * @return void
     */
    public function ListPaymentTypes(ListPaymentTypesRequest $body)
    {
      return $this->__soapCall('ListPaymentTypes', array($body));
    }

    /**
     * Gets the list of available printer devices.
     *
     * @param ListPrinterDevicesRequest $body
     * @return void
     */
    public function ListPrinterDevices(ListPrinterDevicesRequest $body)
    {
      return $this->__soapCall('ListPrinterDevices', array($body));
    }

    /**
     * Gets the list of available carrier services.
     *
     * @param ListServicesRequest $body
     * @return void
     */
    public function ListServices(ListServicesRequest $body)
    {
      return $this->__soapCall('ListServices', array($body));
    }

    /**
     * Gets the list of available ship file items for a carrier and shipper.
     *
     * @param ListShipFilesRequest $body
     * @return void
     */
    public function ListShipFiles(ListShipFilesRequest $body)
    {
      return $this->__soapCall('ListShipFiles', array($body));
    }

    /**
     * Gets the list of available shippers.
     *
     * @param ListShippersRequest $body
     * @return void
     */
    public function ListShippers(ListShippersRequest $body)
    {
      return $this->__soapCall('ListShippers', array($body));
    }

    /**
     * Gets the list of available printer stocks.
     *
     * @param ListStocksRequest $body
     * @return void
     */
    public function ListStocks(ListStocksRequest $body)
    {
      return $this->__soapCall('ListStocks', array($body));
    }

    /**
     * Gets the list of available transmit items for a carrier and shipper.
     *
     * @param ListTransmitItemsRequest $body
     * @return void
     */
    public function ListTransmitItems(ListTransmitItemsRequest $body)
    {
      return $this->__soapCall('ListTransmitItems', array($body));
    }

    /**
     * Gets the list of available units of measurement.
     *
     * @param ListUnitsRequest $body
     * @return void
     */
    public function ListUnits(ListUnitsRequest $body)
    {
      return $this->__soapCall('ListUnits', array($body));
    }

    /**
     * Gets the list of printers configured through Windows.
     *
     * @param ListWindowsPrintersRequest $body
     * @return void
     */
    public function ListWindowsPrinters(ListWindowsPrintersRequest $body)
    {
      return $this->__soapCall('ListWindowsPrinters', array($body));
    }

    /**
     * Modifies data for a previously saved container.
     *
     * @param ModifyContainerRequest $body
     * @return void
     */
    public function ModifyContainer(ModifyContainerRequest $body)
    {
      return $this->__soapCall('ModifyContainer', array($body));
    }

    /**
     * Modifies data and/or status for a group
     *
     * @param ModifyGroupRequest $body
     * @return void
     */
    public function ModifyGroup(ModifyGroupRequest $body)
    {
      return $this->__soapCall('ModifyGroup', array($body));
    }

    /**
     * Modifies data and/or close out mode for a list of packages.
     *
     * @param ModifyPackagesRequest $body
     * @return void
     */
    public function ModifyPackages(ModifyPackagesRequest $body)
    {
      return $this->__soapCall('ModifyPackages', array($body));
    }

    /**
     * Prints or saves a document.
     *
     * @param PrintRequest $body
     * @return void
     */
    public function aPrint(PrintRequest $body)
    {
      return $this->__soapCall('Print', array($body));
    }

    /**
     * Prints or saves a document from its XML representation.
     *
     * @param PrintXmlRequest $body
     * @return void
     */
    public function PrintXml(PrintXmlRequest $body)
    {
      return $this->__soapCall('PrintXml', array($body));
    }

    /**
     * Rates a list of packages using the specified services.
     *
     * @param RateRequest $body
     * @return void
     */
    public function Rate(RateRequest $body)
    {
      return $this->__soapCall('Rate', array($body));
    }

    /**
     * Reprocesses a list of already shipped packages.
     *
     * @param ReprocessRequest $body
     * @return void
     */
    public function Reprocess(ReprocessRequest $body)
    {
      return $this->__soapCall('Reprocess', array($body));
    }

    /**
     * Searches for packages based on the specified criteria
     *
     * @param SearchRequest $body
     * @return void
     */
    public function Search(SearchRequest $body)
    {
      return $this->__soapCall('Search', array($body));
    }

    /**
     * Ships a list of packages using the specified service.
     *
     * @param ShipRequest $body
     * @return void
     */
    public function Ship(ShipRequest $body)
    {
      return $this->__soapCall('Ship', array($body));
    }

    /**
     * Transmits or offloads a list of transmit items.
     *
     * @param TransmitRequest $body
     * @return void
     */
    public function Transmit(TransmitRequest $body)
    {
      return $this->__soapCall('Transmit', array($body));
    }

    /**
     * Validates the specified address.
     *
     * @param ValidateAddressRequest $body
     * @return void
     */
    public function ValidateAddress(ValidateAddressRequest $body)
    {
      return $this->__soapCall('ValidateAddress', array($body));
    }

    /**
     * Voids a list of shipped packages.
     *
     * @param VoidPackagesRequest $body
     * @return void
     */
    public function VoidPackages(VoidPackagesRequest $body)
    {
      return $this->__soapCall('VoidPackages', array($body));
    }

    /**
     * Executes a list of operations in a single request.
     *
     * @param CompoundOperation $body
     * @return void
     */
    public function Compound(CompoundOperation $body)
    {
      return $this->__soapCall('Compound', array($body));
    }

    /**
     * Adds holiday
     *
     * @param AddHolidayRequest $body
     * @return void
     */
    public function AddHoliday(AddHolidayRequest $body)
    {
      return $this->__soapCall('AddHoliday', array($body));
    }

    /**
     * Adds a shipper
     *
     * @param AddShipperRequest $body
     * @return void
     */
    public function AddShipper(AddShipperRequest $body)
    {
      return $this->__soapCall('AddShipper', array($body));
    }

    /**
     * Deletes holiday
     *
     * @param DeleteHolidayRequest $body
     * @return void
     */
    public function DeleteHoliday(DeleteHolidayRequest $body)
    {
      return $this->__soapCall('DeleteHoliday', array($body));
    }

    /**
     * Deletes a shipper
     *
     * @param DeleteShipperRequest $body
     * @return void
     */
    public function DeleteShipper(DeleteShipperRequest $body)
    {
      return $this->__soapCall('DeleteShipper', array($body));
    }

    /**
     * Executes a hook
     *
     * @param ExecuteHookRequest $body
     * @return void
     */
    public function ExecuteHook(ExecuteHookRequest $body)
    {
      return $this->__soapCall('ExecuteHook', array($body));
    }

    /**
     * Gets category property
     *
     * @param GetCategoryPropertyRequest $body
     * @return void
     */
    public function GetCategoryProperty(GetCategoryPropertyRequest $body)
    {
      return $this->__soapCall('GetCategoryProperty', array($body));
    }

    /**
     * Gets category shipper error status
     *
     * @param GetCategoryShipperErrorStatusRequest $body
     * @return void
     */
    public function GetCategoryShipperErrorStatus(GetCategoryShipperErrorStatusRequest $body)
    {
      return $this->__soapCall('GetCategoryShipperErrorStatus', array($body));
    }

    /**
     * Gets Progistics Management Console component configuration assembly (for internal use only)
     *
     * @param GetComponentConfigurationAssemblyRequest $body
     * @return void
     */
    public function GetComponentConfigurationAssembly(GetComponentConfigurationAssemblyRequest $body)
    {
      return $this->__soapCall('GetComponentConfigurationAssembly', array($body));
    }

    /**
     * Gets holidays
     *
     * @param GetHolidaysRequest $body
     * @return void
     */
    public function GetHolidays(GetHolidaysRequest $body)
    {
      return $this->__soapCall('GetHolidays', array($body));
    }

    /**
     * Gets hooks schema
     *
     * @param GetHooksSchemaRequest $body
     * @return void
     */
    public function GetHooksSchema(GetHooksSchemaRequest $body)
    {
      return $this->__soapCall('GetHooksSchema', array($body));
    }

    /**
     * Gets Server Error Status
     *
     * @param GetServerErrorStatusRequest $body
     * @return void
     */
    public function GetServerErrorStatus(GetServerErrorStatusRequest $body)
    {
      return $this->__soapCall('GetServerErrorStatus', array($body));
    }

    /**
     * Gets shipper configuration data
     *
     * @param GetShipperConfigDataRequest $body
     * @return void
     */
    public function GetShipperConfigData(GetShipperConfigDataRequest $body)
    {
      return $this->__soapCall('GetShipperConfigData', array($body));
    }

    /**
     * Gets shipper configuration schema
     *
     * @param GetShipperConfigSchemaRequest $body
     * @return void
     */
    public function GetShipperConfigSchema(GetShipperConfigSchemaRequest $body)
    {
      return $this->__soapCall('GetShipperConfigSchema', array($body));
    }

    /**
     * Gets shipper control data
     *
     * @param GetShipperControlDataRequest $body
     * @return void
     */
    public function GetShipperControlData(GetShipperControlDataRequest $body)
    {
      return $this->__soapCall('GetShipperControlData', array($body));
    }

    /**
     * Gets shipper control schema
     *
     * @param GetShipperControlSchemaRequest $body
     * @return void
     */
    public function GetShipperControlSchema(GetShipperControlSchemaRequest $body)
    {
      return $this->__soapCall('GetShipperControlSchema', array($body));
    }

    /**
     * Gets shipper error status
     *
     * @param GetShipperErrorStatusRequest $body
     * @return void
     */
    public function GetShipperErrorStatus(GetShipperErrorStatusRequest $body)
    {
      return $this->__soapCall('GetShipperErrorStatus', array($body));
    }

    /**
     * Lists Servers
     *
     * @param ListServersRequest $body
     * @return void
     */
    public function ListServers(ListServersRequest $body)
    {
      return $this->__soapCall('ListServers', array($body));
    }

    /**
     * Registers a shipper
     *
     * @param RegisterShipperRequest $body
     * @return void
     */
    public function RegisterShipper(RegisterShipperRequest $body)
    {
      return $this->__soapCall('RegisterShipper', array($body));
    }

    /**
     * Sets shipper abbreviation
     *
     * @param SetShipperAbbreviationRequest $body
     * @return void
     */
    public function SetShipperAbbreviation(SetShipperAbbreviationRequest $body)
    {
      return $this->__soapCall('SetShipperAbbreviation', array($body));
    }

    /**
     * Sets shipper configuration information
     *
     * @param SetShipperConfigInfoRequest $body
     * @return void
     */
    public function SetShipperConfigInfo(SetShipperConfigInfoRequest $body)
    {
      return $this->__soapCall('SetShipperConfigInfo', array($body));
    }

    /**
     * Sets shipper control information
     *
     * @param SetShipperControlInfoRequest $body
     * @return void
     */
    public function SetShipperControlInfo(SetShipperControlInfoRequest $body)
    {
      return $this->__soapCall('SetShipperControlInfo', array($body));
    }

    /**
     * Sest shipper name/address
     *
     * @param SetShipperNameAddressRequest $body
     * @return void
     */
    public function SetShipperNameAddress(SetShipperNameAddressRequest $body)
    {
      return $this->__soapCall('SetShipperNameAddress', array($body));
    }

    /**
     * Unregisters a shipper
     *
     * @param UnRegisterShipperRequest $body
     * @return void
     */
    public function UnRegisterShipper(UnRegisterShipperRequest $body)
    {
      return $this->__soapCall('UnRegisterShipper', array($body));
    }

}
