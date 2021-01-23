
<?php

class AdditionalInfoAdder
{

public function addType($dataSet, $typeName){
   
   
    foreach($dataSet as $record){
        $record->type = $typeName;
    }
}

public function assignUniqueIds($dataSet){
    $i=1;
    foreach($dataSet as $record){
        $record->uniqueID = $i++;
    }
}

}