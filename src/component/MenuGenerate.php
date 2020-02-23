<?php
namespace jimmyyoungyoyo\adminlte\component;

use yii\base\Widget;

class MenuGenerate extends Widget
{
    public $menu;

    public function init($menu = [])
    {
        $this->menu = $menu;
    }

    public function run()
    {
        $template = '<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">';
        foreach ($this->menu as $item) {
            if (isset($item['items']) && count($item['items']) > 0) {
                $template .= $this->renderItemTree($item);
            } else {
                $template .= $this->renderItem($item);
            }
        }
        $template .= '</ul>';
        return $template;
    }

    private function renderItem($item)
    {
        $active = $item['active'] == true ? 'active' : '';
        $format = '<li class="nav-item">';
        $format .= "<a href='{$item['url']}' class='nav-link {$active}'>";
        $format .= "<i class='nav-icon {$item['icon']}'></i>";
        $format .= "<p>{$item['label']}</p>";
        $format .= '</a>';
        $format .= '</li>';
        return $format;
    }

    private function renderItemTree($tree)
    {
        $flag = false;

        $format = "<li class='nav-item has-treeview {menu-open}'>";
        $format .= "<a href='#' class='nav-link {active}'>";
        $format .= "<i class='nav-icon {$tree['icon']}'></i>";
        $format .= "<p>{$tree['label']}";
        $format .= '<i class="right fas fa-angle-left"></i></p> </a>';
        $format .= '<ul class="nav nav-treeview">';
        foreach ($tree['items'] as $item) {
            $format .=  $this->renderItem($item);
            if ($flag == false && $item['active'] == true) {
                $flag = true;
            }
        }
        $format .= '</ul>';
        $format .= '</li>';

        if ($flag) {
            $format = str_replace('{active}', 'active', $format);
            $format = str_replace('{menu-open}', 'menu-open', $format);
        } else {
            $format = str_replace('{active}', '', $format);
            $format = str_replace('{menu-open}', '', $format);
        }
        
        return $format;
    }
}
