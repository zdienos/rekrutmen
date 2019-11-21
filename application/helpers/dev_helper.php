<?php
defined('BASEPATH') or exit('No direct script access allowed');

function GenerateCode($database, $table, $colom, $case)

{
    $ci = &get_instance();
    $ci->$database->select($colom);
    $ci->$database->from($table);
    $number = $ci->$database->get()->num_rows() + 1;
    $case = $case;
    $result = $case . "" . $number;
    return $result;
}

function cek_duplikat($database, $table, $colom, $where, $data)
{
    $ci = &get_instance();
    $ci->$database->select($colom);
    $ci->$database->from($table);
    if (is_array($where)) {
        $hitung = count($where);
        for ($i = 0; $i < $hitung; $i++) {
            $ci->$database->where($where[$i], $data[$i]);
        }
    } else {
        $ci->$database->where($where, $data);
    }
    $cek = $ci->$database->get()->num_rows();
    return $cek;
}

function delete_data($database, $table, $colom, $where)
{
    $ci = &get_instance();
    $ci->$database->where($colom, $where);
    $ci->$database->delete($table);
}

function v_all($database, $select, $table)
{
    $ci = &get_instance();
    $ci->$database->select($select);
    $ci->$database->from($table);
    $data = $ci->$database->get();
    return $data->result();
}

function v_like($database, $select, $table, $c_like, $group_by, $v_like)
{
    $ci = &get_instance();
    $ci->$database->select($select);
    $ci->$database->from($table);
    $ci->$database->like($c_like, $v_like);
    if (empty($group_by)) {
        null;
    } else {
        $ci->$database->group_by($group_by);
    }
    $data = $ci->$database->get();
    return $data->result();
}

function v_where($database, $select, $table, $c_where, $v_where)
{
    $ci = &get_instance();
    $ci->$database->select($select);
    $ci->$database->from($table);
    $ci->$database->where($c_where, $v_where);
    $data = $ci->$database->get();
    foreach ($data->result() as $row) {
        $return = $row->$select;
    }
    if (empty($return)) {
        $return = null;
    }
    return $return;
}

function v_where_all($database, $select, $table, $c_where, $v_where)
{
    $ci = &get_instance();
    $ci->$database->select($select);
    $ci->$database->from($table);
    $ci->$database->where($c_where, $v_where);
    $data = $ci->$database->get();
    return $data->result();
}

function notif_kesalahan($pesan_error, $replace_lokasi)
{
    echo "<script>";
    echo "alert('" . $pesan_error . "');";
    echo "location.replace('" . $replace_lokasi . "');";
    echo "</script>";
}
