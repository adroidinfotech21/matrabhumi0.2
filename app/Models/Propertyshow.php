<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertyshow extends Model
{
    use HasFactory;
    protected $fillable = [
        'propertyID',
        'packageID',
        'propertyTypeID',
        'propertyDetailsForID',
        'month',
        'bedroom',
        'balcony',
        'floor',
        'bathroom',
        'furnishedStatus',
        'cabinMeetingRoom',
        'transactionType',
        'possessionStatus',
        'showPriceAs',
        'priceIncludes',
        'maintenanceChargeFrequency',
        'noticePeriod',
        'userID',
        'cornerShop',
        'mainRoadFacing',
        'sharedOfficeSpace',
        'attachedBathroom',
        'attachedBalcony',
        'commonArea',
        'anyConstructionDone',
        'boundaryWallMade',
        'inGatedColony',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'zipCode',
        'country',
        'latitude',
        'longitude',
        'builtUpArea',
        'carpetArea',
        'plotArea',
        'unitOfArea',
        'price',
        'currency',
        'ownerName',
        'ownerContactNumber',
        'ownerEmail',
        'parkingSpaces',
        'powerBackup',
        'waterSupply',
        'security',
        'gym',
        'swimmingPool',
        'clubHouse',
        'lift',
        'listingTitle',
        'listingDescription',
        'propertyStatus',
        'listingType',
        'agentID',
        'propertyAge',
        'ownershipType',
        'registrationNumber',
        'legalClearance',
        'nearSchool',
        'nearHospital',
        'nearMarket',
        'nearPublicTransport',
        'nearPark',
        'earthquakeResistant',
        'fireSafety',
        'rainwaterHarvesting',
        'greenBuilding',
        'numberOfFloors',
        'flooringType',
        'facingDirection',
        'garden',
        'terrace',
        'rooftop',
        'electricityAvailable',
        'waterAvailable',
        'gasConnection',
        'internetConnection',
        'cableTV',
        'mortgageStatus',
        'mortgageProvider',
        'mortgageAmount',
        'emiAmount',
        'petFriendly',
        'handicapAccessible',
        'floorPlan',
        'virtualTour',
        'imageSiteView',
        'imageExteriorView',
        'imageCommonArea',
        'imageLivingRoom',
        'imageBedroom',
        'imageBathroom',
        'imageKitchen',
        'imageFloorPlan',
        'imageMasterPlan',
        'imageLocationMap',
        'imageOther',
        'askedPrice'
    ];
}
