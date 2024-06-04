<?php
  
namespace App\Imports;
  
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
  
class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'     => $row['name'],
            'slug'    => $row['slug'], 
            'qty' => $row['qty'],
            'price' => $row['price'],
            'desc1' => $row['desc1'],
        ]);
    }
}
