<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'orders');
        if (!$dataType->exists) {
            $dataType->fill(
                [
                    'name' => 'orders',
                    'display_name_singular' => 'Order',
                    'display_name_plural' => 'Orders',
                    'icon' => 'voyager-anchor',
                    'model_name' => 'App\Models\Order',
                    'policy_name' => '',
                    'controller' => '',
                    'generate_permissions' => 1,
                    'description' => '',
                ]
            )->save();
        }

        //Data Rows
        $orderDataType = DataType::where('slug', 'orders')->firstOrFail();
        $dataRow = $this->dataRow($orderDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'number',
                    'display_name' => __('voyager::seeders.data_rows.id'),
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'order' => 1,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'order_belongsto_tour_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
               'type'         => 'relationship',
               'display_name' => 'Tour',
               'required'     => 1,
               'browse'       => 1,
               'read'         => 1,
               'edit'         => 1,
               'add'          => 1,
               'delete'       => 1,
               'order'        => 2,
               'details'     => [
                   'model' => 'App\\Models\\Tour',
                   'table' => 'tours',
                   'type' => 'belongsTo',
                   'column' => 'tour_id',
                   'key' => 'id',
                   'label' => 'title',
                   'pivot_table' => 'tours',
                   'pivot' => '0',
                   'taggable' => '0',
               ]
            ])->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'surname');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Surname',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 3,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Name',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 4,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Phone',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 5,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Email',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 6,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'timestamp',
                    'display_name' => __('voyager::seeders.data_rows.created_at'),
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'order' => 12,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($orderDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'timestamp',
                    'display_name' => __('voyager::seeders.data_rows.updated_at'),
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'order' => 13,
                ]
            )->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew(
            [
                'menu_id' => $menu->id,
                'title' => 'Orders',
                'url' => '',
                'route' => 'voyager.orders.index',
            ]
        );

        if (!$menuItem->exists) {
            $menuItem->fill(
                [
                    'target' => '_self',
                    'icon_class' => 'voyager-anchor',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 18,
                ]
            )->save();
        }

        //Permissions
        Permission::generateFor('orders');
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew(
            [
                'data_type_id' => $type->id,
                'field' => $field,
            ]
        );
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
