<?php


 function autoload_84f4ba6b13bfbec5de992129261fde3e($class)
{
    $classes = array(
        'Williams\ConnectShip\AMPServices' => __DIR__ .'/AMPServices.php',
        'Williams\ConnectShip\Commitment' => __DIR__ .'/Commitment.php',
        'Williams\ConnectShip\Dimensions' => __DIR__ .'/Dimensions.php',
        'Williams\ConnectShip\Group' => __DIR__ .'/Group.php',
        'Williams\ConnectShip\Identity' => __DIR__ .'/Identity.php',
        'Williams\ConnectShip\Money' => __DIR__ .'/Money.php',
        'Williams\ConnectShip\HazmatQuantity' => __DIR__ .'/HazmatQuantity.php',
        'Williams\ConnectShip\NameAddress' => __DIR__ .'/NameAddress.php',
        'Williams\ConnectShip\PrintArea' => __DIR__ .'/PrintArea.php',
        'Williams\ConnectShip\ShipperInformation' => __DIR__ .'/ShipperInformation.php',
        'Williams\ConnectShip\PrintAreaList' => __DIR__ .'/PrintAreaList.php',
        'Williams\ConnectShip\StockDescriptor' => __DIR__ .'/StockDescriptor.php',
        'Williams\ConnectShip\Volume' => __DIR__ .'/Volume.php',
        'Williams\ConnectShip\Weight' => __DIR__ .'/Weight.php',
        'Williams\ConnectShip\Holiday' => __DIR__ .'/Holiday.php',
        'Williams\ConnectShip\CollectionBase' => __DIR__ .'/CollectionBase.php',
        'Williams\ConnectShip\ListCustom' => __DIR__ .'/ListCustom.php',
        'Williams\ConnectShip\DictionaryItem' => __DIR__ .'/DictionaryItem.php',
        'Williams\ConnectShip\Dictionary' => __DIR__ .'/Dictionary.php',
        'Williams\ConnectShip\StringList' => __DIR__ .'/StringList.php',
        'Williams\ConnectShip\IntegerList' => __DIR__ .'/IntegerList.php',
        'Williams\ConnectShip\IdentityList' => __DIR__ .'/IdentityList.php',
        'Williams\ConnectShip\DataDictionaryList' => __DIR__ .'/DataDictionaryList.php',
        'Williams\ConnectShip\Commodity' => __DIR__ .'/Commodity.php',
        'Williams\ConnectShip\CommodityList' => __DIR__ .'/CommodityList.php',
        'Williams\ConnectShip\HazmatItem' => __DIR__ .'/HazmatItem.php',
        'Williams\ConnectShip\HazmatItemList' => __DIR__ .'/HazmatItemList.php',
        'Williams\ConnectShip\AlcoholItem' => __DIR__ .'/AlcoholItem.php',
        'Williams\ConnectShip\AlcoholItemList' => __DIR__ .'/AlcoholItemList.php',
        'Williams\ConnectShip\DataDictionary' => __DIR__ .'/DataDictionary.php',
        'Williams\ConnectShip\contextControlSetting' => __DIR__ .'/contextControlSetting.php',
        'Williams\ConnectShip\Result' => __DIR__ .'/Result.php',
        'Williams\ConnectShip\IdentityListResult' => __DIR__ .'/IdentityListResult.php',
        'Williams\ConnectShip\GroupResult' => __DIR__ .'/GroupResult.php',
        'Williams\ConnectShip\ShipperResult' => __DIR__ .'/ShipperResult.php',
        'Williams\ConnectShip\StringResult' => __DIR__ .'/StringResult.php',
        'Williams\ConnectShip\BooleanResult' => __DIR__ .'/BooleanResult.php',
        'Williams\ConnectShip\IdentityResult' => __DIR__ .'/IdentityResult.php',
        'Williams\ConnectShip\DictionaryResult' => __DIR__ .'/DictionaryResult.php',
        'Williams\ConnectShip\PackageResult' => __DIR__ .'/PackageResult.php',
        'Williams\ConnectShip\PackageResultList' => __DIR__ .'/PackageResultList.php',
        'Williams\ConnectShip\ProcessResult' => __DIR__ .'/ProcessResult.php',
        'Williams\ConnectShip\ProcessResultList' => __DIR__ .'/ProcessResultList.php',
        'Williams\ConnectShip\RateResult' => __DIR__ .'/RateResult.php',
        'Williams\ConnectShip\ImageItemList' => __DIR__ .'/ImageItemList.php',
        'Williams\ConnectShip\DocumentOutput' => __DIR__ .'/DocumentOutput.php',
        'Williams\ConnectShip\PrintItem' => __DIR__ .'/PrintItem.php',
        'Williams\ConnectShip\DocumentResult' => __DIR__ .'/DocumentResult.php',
        'Williams\ConnectShip\DocumentResultList' => __DIR__ .'/DocumentResultList.php',
        'Williams\ConnectShip\PrintResult' => __DIR__ .'/PrintResult.php',
        'Williams\ConnectShip\VoidPackageResult' => __DIR__ .'/VoidPackageResult.php',
        'Williams\ConnectShip\VoidPackageResultList' => __DIR__ .'/VoidPackageResultList.php',
        'Williams\ConnectShip\VoidResult' => __DIR__ .'/VoidResult.php',
        'Williams\ConnectShip\SearchPackageResult' => __DIR__ .'/SearchPackageResult.php',
        'Williams\ConnectShip\SearchPackageResultList' => __DIR__ .'/SearchPackageResultList.php',
        'Williams\ConnectShip\SearchResult' => __DIR__ .'/SearchResult.php',
        'Williams\ConnectShip\ShipFile' => __DIR__ .'/ShipFile.php',
        'Williams\ConnectShip\TransmitItem' => __DIR__ .'/TransmitItem.php',
        'Williams\ConnectShip\TransmitItemList' => __DIR__ .'/TransmitItemList.php',
        'Williams\ConnectShip\CloseOutResult' => __DIR__ .'/CloseOutResult.php',
        'Williams\ConnectShip\TransmitItemResult' => __DIR__ .'/TransmitItemResult.php',
        'Williams\ConnectShip\TransmitItemResultList' => __DIR__ .'/TransmitItemResultList.php',
        'Williams\ConnectShip\TransmitResult' => __DIR__ .'/TransmitResult.php',
        'Williams\ConnectShip\ModifyPackageResult' => __DIR__ .'/ModifyPackageResult.php',
        'Williams\ConnectShip\ModifyPackageResultList' => __DIR__ .'/ModifyPackageResultList.php',
        'Williams\ConnectShip\ModifyPackagesResult' => __DIR__ .'/ModifyPackagesResult.php',
        'Williams\ConnectShip\CandidateAddress' => __DIR__ .'/CandidateAddress.php',
        'Williams\ConnectShip\CandidateAddressList' => __DIR__ .'/CandidateAddressList.php',
        'Williams\ConnectShip\ValidateResult' => __DIR__ .'/ValidateResult.php',
        'Williams\ConnectShip\StockDescriptorList' => __DIR__ .'/StockDescriptorList.php',
        'Williams\ConnectShip\ListStocksResult' => __DIR__ .'/ListStocksResult.php',
        'Williams\ConnectShip\GroupList' => __DIR__ .'/GroupList.php',
        'Williams\ConnectShip\ListGroupsResult' => __DIR__ .'/ListGroupsResult.php',
        'Williams\ConnectShip\ListTransmitItemsResult' => __DIR__ .'/ListTransmitItemsResult.php',
        'Williams\ConnectShip\ShipFileList' => __DIR__ .'/ShipFileList.php',
        'Williams\ConnectShip\ListShipFilesResult' => __DIR__ .'/ListShipFilesResult.php',
        'Williams\ConnectShip\StringListResult' => __DIR__ .'/StringListResult.php',
        'Williams\ConnectShip\HolidayItem' => __DIR__ .'/HolidayItem.php',
        'Williams\ConnectShip\HolidayDictionary' => __DIR__ .'/HolidayDictionary.php',
        'Williams\ConnectShip\HolidayList' => __DIR__ .'/HolidayList.php',
        'Williams\ConnectShip\ListHolidaysResult' => __DIR__ .'/ListHolidaysResult.php',
        'Williams\ConnectShip\CloseOutRequest' => __DIR__ .'/CloseOutRequest.php',
        'Williams\ConnectShip\CloseOutResponse' => __DIR__ .'/CloseOutResponse.php',
        'Williams\ConnectShip\CreateGroupRequest' => __DIR__ .'/CreateGroupRequest.php',
        'Williams\ConnectShip\CreateGroupResponse' => __DIR__ .'/CreateGroupResponse.php',
        'Williams\ConnectShip\CustomOperationRequest' => __DIR__ .'/CustomOperationRequest.php',
        'Williams\ConnectShip\CustomOperationResponse' => __DIR__ .'/CustomOperationResponse.php',
        'Williams\ConnectShip\DeleteShipFilesRequest' => __DIR__ .'/DeleteShipFilesRequest.php',
        'Williams\ConnectShip\DeleteShipFilesResponse' => __DIR__ .'/DeleteShipFilesResponse.php',
        'Williams\ConnectShip\DeleteTransmitItemsRequest' => __DIR__ .'/DeleteTransmitItemsRequest.php',
        'Williams\ConnectShip\DeleteTransmitItemsResponse' => __DIR__ .'/DeleteTransmitItemsResponse.php',
        'Williams\ConnectShip\GetGroupRequest' => __DIR__ .'/GetGroupRequest.php',
        'Williams\ConnectShip\GetGroupResponse' => __DIR__ .'/GetGroupResponse.php',
        'Williams\ConnectShip\GetSchemaRequest' => __DIR__ .'/GetSchemaRequest.php',
        'Williams\ConnectShip\GetSchemaResponse' => __DIR__ .'/GetSchemaResponse.php',
        'Williams\ConnectShip\GetShipperInformationRequest' => __DIR__ .'/GetShipperInformationRequest.php',
        'Williams\ConnectShip\GetShipperInformationResponse' => __DIR__ .'/GetShipperInformationResponse.php',
        'Williams\ConnectShip\ListCarriersRequest' => __DIR__ .'/ListCarriersRequest.php',
        'Williams\ConnectShip\ListCarriersResponse' => __DIR__ .'/ListCarriersResponse.php',
        'Williams\ConnectShip\ListCloseOutItemsRequest' => __DIR__ .'/ListCloseOutItemsRequest.php',
        'Williams\ConnectShip\ListCloseOutItemsResponse' => __DIR__ .'/ListCloseOutItemsResponse.php',
        'Williams\ConnectShip\ListCountriesRequest' => __DIR__ .'/ListCountriesRequest.php',
        'Williams\ConnectShip\ListCountriesResponse' => __DIR__ .'/ListCountriesResponse.php',
        'Williams\ConnectShip\ListCountryServicesRequest' => __DIR__ .'/ListCountryServicesRequest.php',
        'Williams\ConnectShip\ListCountryServicesResponse' => __DIR__ .'/ListCountryServicesResponse.php',
        'Williams\ConnectShip\ListCurrenciesRequest' => __DIR__ .'/ListCurrenciesRequest.php',
        'Williams\ConnectShip\ListCurrenciesResponse' => __DIR__ .'/ListCurrenciesResponse.php',
        'Williams\ConnectShip\ListDocumentFormatsRequest' => __DIR__ .'/ListDocumentFormatsRequest.php',
        'Williams\ConnectShip\ListDocumentFormatsResponse' => __DIR__ .'/ListDocumentFormatsResponse.php',
        'Williams\ConnectShip\ListDocumentsRequest' => __DIR__ .'/ListDocumentsRequest.php',
        'Williams\ConnectShip\ListDocumentsResponse' => __DIR__ .'/ListDocumentsResponse.php',
        'Williams\ConnectShip\ListGroupingsRequest' => __DIR__ .'/ListGroupingsRequest.php',
        'Williams\ConnectShip\ListGroupingsResponse' => __DIR__ .'/ListGroupingsResponse.php',
        'Williams\ConnectShip\ListGroupsRequest' => __DIR__ .'/ListGroupsRequest.php',
        'Williams\ConnectShip\ListGroupsResponse' => __DIR__ .'/ListGroupsResponse.php',
        'Williams\ConnectShip\ListIncotermsRequest' => __DIR__ .'/ListIncotermsRequest.php',
        'Williams\ConnectShip\ListIncotermsResponse' => __DIR__ .'/ListIncotermsResponse.php',
        'Williams\ConnectShip\ListLocalPortsRequest' => __DIR__ .'/ListLocalPortsRequest.php',
        'Williams\ConnectShip\ListLocalPortsResponse' => __DIR__ .'/ListLocalPortsResponse.php',
        'Williams\ConnectShip\ListPackagingTypesRequest' => __DIR__ .'/ListPackagingTypesRequest.php',
        'Williams\ConnectShip\ListPackagingTypesResponse' => __DIR__ .'/ListPackagingTypesResponse.php',
        'Williams\ConnectShip\ListPaymentTypesRequest' => __DIR__ .'/ListPaymentTypesRequest.php',
        'Williams\ConnectShip\ListPaymentTypesResponse' => __DIR__ .'/ListPaymentTypesResponse.php',
        'Williams\ConnectShip\ListPrinterDevicesRequest' => __DIR__ .'/ListPrinterDevicesRequest.php',
        'Williams\ConnectShip\ListPrinterDevicesResponse' => __DIR__ .'/ListPrinterDevicesResponse.php',
        'Williams\ConnectShip\ListServicesRequest' => __DIR__ .'/ListServicesRequest.php',
        'Williams\ConnectShip\ListServicesResponse' => __DIR__ .'/ListServicesResponse.php',
        'Williams\ConnectShip\ListShipFilesRequest' => __DIR__ .'/ListShipFilesRequest.php',
        'Williams\ConnectShip\ListShipFilesResponse' => __DIR__ .'/ListShipFilesResponse.php',
        'Williams\ConnectShip\ListShippersRequest' => __DIR__ .'/ListShippersRequest.php',
        'Williams\ConnectShip\ListShippersResponse' => __DIR__ .'/ListShippersResponse.php',
        'Williams\ConnectShip\ListStocksRequest' => __DIR__ .'/ListStocksRequest.php',
        'Williams\ConnectShip\ListStocksResponse' => __DIR__ .'/ListStocksResponse.php',
        'Williams\ConnectShip\ListTransmitItemsRequest' => __DIR__ .'/ListTransmitItemsRequest.php',
        'Williams\ConnectShip\ListTransmitItemsResponse' => __DIR__ .'/ListTransmitItemsResponse.php',
        'Williams\ConnectShip\ListUnitsRequest' => __DIR__ .'/ListUnitsRequest.php',
        'Williams\ConnectShip\ListUnitsResponse' => __DIR__ .'/ListUnitsResponse.php',
        'Williams\ConnectShip\ListWindowsPrintersRequest' => __DIR__ .'/ListWindowsPrintersRequest.php',
        'Williams\ConnectShip\ListWindowsPrintersResponse' => __DIR__ .'/ListWindowsPrintersResponse.php',
        'Williams\ConnectShip\ModifyContainerRequest' => __DIR__ .'/ModifyContainerRequest.php',
        'Williams\ConnectShip\ModifyContainerResponse' => __DIR__ .'/ModifyContainerResponse.php',
        'Williams\ConnectShip\ModifyGroupRequest' => __DIR__ .'/ModifyGroupRequest.php',
        'Williams\ConnectShip\ModifyGroupResponse' => __DIR__ .'/ModifyGroupResponse.php',
        'Williams\ConnectShip\ModifyPackagesRequest' => __DIR__ .'/ModifyPackagesRequest.php',
        'Williams\ConnectShip\ModifyPackagesResponse' => __DIR__ .'/ModifyPackagesResponse.php',
        'Williams\ConnectShip\PrintItemList' => __DIR__ .'/PrintItemList.php',
        'Williams\ConnectShip\PrintRequest' => __DIR__ .'/PrintRequest.php',
        'Williams\ConnectShip\PrintResponse' => __DIR__ .'/PrintResponse.php',
        'Williams\ConnectShip\PrintXmlRequest' => __DIR__ .'/PrintXmlRequest.php',
        'Williams\ConnectShip\PrintXmlResponse' => __DIR__ .'/PrintXmlResponse.php',
        'Williams\ConnectShip\ServiceList' => __DIR__ .'/ServiceList.php',
        'Williams\ConnectShip\RateRequest' => __DIR__ .'/RateRequest.php',
        'Williams\ConnectShip\RateResponse' => __DIR__ .'/RateResponse.php',
        'Williams\ConnectShip\ReprocessRequest' => __DIR__ .'/ReprocessRequest.php',
        'Williams\ConnectShip\ReprocessResponse' => __DIR__ .'/ReprocessResponse.php',
        'Williams\ConnectShip\SearchRequest' => __DIR__ .'/SearchRequest.php',
        'Williams\ConnectShip\SearchResponse' => __DIR__ .'/SearchResponse.php',
        'Williams\ConnectShip\ShipRequest' => __DIR__ .'/ShipRequest.php',
        'Williams\ConnectShip\ShipResponse' => __DIR__ .'/ShipResponse.php',
        'Williams\ConnectShip\TransmitRequest' => __DIR__ .'/TransmitRequest.php',
        'Williams\ConnectShip\TransmitResponse' => __DIR__ .'/TransmitResponse.php',
        'Williams\ConnectShip\ValidateAddressRequest' => __DIR__ .'/ValidateAddressRequest.php',
        'Williams\ConnectShip\ValidateAddressResponse' => __DIR__ .'/ValidateAddressResponse.php',
        'Williams\ConnectShip\VoidPackagesRequest' => __DIR__ .'/VoidPackagesRequest.php',
        'Williams\ConnectShip\VoidPackagesResponse' => __DIR__ .'/VoidPackagesResponse.php',
        'Williams\ConnectShip\ErrorResponse' => __DIR__ .'/ErrorResponse.php',
        'Williams\ConnectShip\CompoundOperation' => __DIR__ .'/CompoundOperation.php',
        'Williams\ConnectShip\CompoundResult' => __DIR__ .'/CompoundResult.php',
        'Williams\ConnectShip\AddHolidayRequest' => __DIR__ .'/AddHolidayRequest.php',
        'Williams\ConnectShip\AddHolidayResponse' => __DIR__ .'/AddHolidayResponse.php',
        'Williams\ConnectShip\AddShipperRequest' => __DIR__ .'/AddShipperRequest.php',
        'Williams\ConnectShip\AddShipperResponse' => __DIR__ .'/AddShipperResponse.php',
        'Williams\ConnectShip\DeleteHolidayRequest' => __DIR__ .'/DeleteHolidayRequest.php',
        'Williams\ConnectShip\DeleteHolidayResponse' => __DIR__ .'/DeleteHolidayResponse.php',
        'Williams\ConnectShip\DeleteShipperRequest' => __DIR__ .'/DeleteShipperRequest.php',
        'Williams\ConnectShip\DeleteShipperResponse' => __DIR__ .'/DeleteShipperResponse.php',
        'Williams\ConnectShip\ExecuteHookRequest' => __DIR__ .'/ExecuteHookRequest.php',
        'Williams\ConnectShip\ExecuteHookResponse' => __DIR__ .'/ExecuteHookResponse.php',
        'Williams\ConnectShip\GetCategoryPropertyRequest' => __DIR__ .'/GetCategoryPropertyRequest.php',
        'Williams\ConnectShip\GetCategoryPropertyResponse' => __DIR__ .'/GetCategoryPropertyResponse.php',
        'Williams\ConnectShip\GetCategoryShipperErrorStatusRequest' => __DIR__ .'/GetCategoryShipperErrorStatusRequest.php',
        'Williams\ConnectShip\GetCategoryShipperErrorStatusResponse' => __DIR__ .'/GetCategoryShipperErrorStatusResponse.php',
        'Williams\ConnectShip\GetComponentConfigurationAssemblyRequest' => __DIR__ .'/GetComponentConfigurationAssemblyRequest.php',
        'Williams\ConnectShip\GetComponentConfigurationAssemblyResponse' => __DIR__ .'/GetComponentConfigurationAssemblyResponse.php',
        'Williams\ConnectShip\GetHolidaysRequest' => __DIR__ .'/GetHolidaysRequest.php',
        'Williams\ConnectShip\GetHolidaysResponse' => __DIR__ .'/GetHolidaysResponse.php',
        'Williams\ConnectShip\GetHooksSchemaRequest' => __DIR__ .'/GetHooksSchemaRequest.php',
        'Williams\ConnectShip\GetHooksSchemaResponse' => __DIR__ .'/GetHooksSchemaResponse.php',
        'Williams\ConnectShip\GetServerErrorStatusRequest' => __DIR__ .'/GetServerErrorStatusRequest.php',
        'Williams\ConnectShip\GetServerErrorStatusResponse' => __DIR__ .'/GetServerErrorStatusResponse.php',
        'Williams\ConnectShip\GetShipperConfigDataRequest' => __DIR__ .'/GetShipperConfigDataRequest.php',
        'Williams\ConnectShip\GetShipperConfigDataResponse' => __DIR__ .'/GetShipperConfigDataResponse.php',
        'Williams\ConnectShip\GetShipperConfigSchemaRequest' => __DIR__ .'/GetShipperConfigSchemaRequest.php',
        'Williams\ConnectShip\GetShipperConfigSchemaResponse' => __DIR__ .'/GetShipperConfigSchemaResponse.php',
        'Williams\ConnectShip\GetShipperControlDataRequest' => __DIR__ .'/GetShipperControlDataRequest.php',
        'Williams\ConnectShip\GetShipperControlDataResponse' => __DIR__ .'/GetShipperControlDataResponse.php',
        'Williams\ConnectShip\GetShipperControlSchemaRequest' => __DIR__ .'/GetShipperControlSchemaRequest.php',
        'Williams\ConnectShip\GetShipperControlSchemaResponse' => __DIR__ .'/GetShipperControlSchemaResponse.php',
        'Williams\ConnectShip\GetShipperErrorStatusRequest' => __DIR__ .'/GetShipperErrorStatusRequest.php',
        'Williams\ConnectShip\GetShipperErrorStatusResponse' => __DIR__ .'/GetShipperErrorStatusResponse.php',
        'Williams\ConnectShip\ListServersRequest' => __DIR__ .'/ListServersRequest.php',
        'Williams\ConnectShip\ListServersResponse' => __DIR__ .'/ListServersResponse.php',
        'Williams\ConnectShip\RegisterShipperRequest' => __DIR__ .'/RegisterShipperRequest.php',
        'Williams\ConnectShip\RegisterShipperResponse' => __DIR__ .'/RegisterShipperResponse.php',
        'Williams\ConnectShip\SetShipperAbbreviationRequest' => __DIR__ .'/SetShipperAbbreviationRequest.php',
        'Williams\ConnectShip\SetShipperAbbreviationResponse' => __DIR__ .'/SetShipperAbbreviationResponse.php',
        'Williams\ConnectShip\SetShipperConfigInfoRequest' => __DIR__ .'/SetShipperConfigInfoRequest.php',
        'Williams\ConnectShip\SetShipperConfigInfoResponse' => __DIR__ .'/SetShipperConfigInfoResponse.php',
        'Williams\ConnectShip\SetShipperControlInfoRequest' => __DIR__ .'/SetShipperControlInfoRequest.php',
        'Williams\ConnectShip\SetShipperControlInfoResponse' => __DIR__ .'/SetShipperControlInfoResponse.php',
        'Williams\ConnectShip\SetShipperNameAddressRequest' => __DIR__ .'/SetShipperNameAddressRequest.php',
        'Williams\ConnectShip\SetShipperNameAddressResponse' => __DIR__ .'/SetShipperNameAddressResponse.php',
        'Williams\ConnectShip\UnRegisterShipperRequest' => __DIR__ .'/UnRegisterShipperRequest.php',
        'Williams\ConnectShip\UnRegisterShipperResponse' => __DIR__ .'/UnRegisterShipperResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_84f4ba6b13bfbec5de992129261fde3e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
