<?php
// created: 2020-06-08 17:53:09
$dictionary["users_ptg_hostedantisoftwareemail_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'users_ptg_hostedantisoftwareemail_1' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ptg_HostedAntiSoftwareEmail',
      'rhs_table' => 'ptg_hostedantisoftwareemail',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'users_ptg_hostedantisoftwareemail_1_c',
      'join_key_lhs' => 'users_ptg_hostedantisoftwareemail_1users_ida',
      'join_key_rhs' => 'users_ptg_b1bdreemail_idb',
    ),
  ),
  'table' => 'users_ptg_hostedantisoftwareemail_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'users_ptg_hostedantisoftwareemail_1users_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'users_ptg_b1bdreemail_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'users_ptg_hostedantisoftwareemail_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'users_ptg_hostedantisoftwareemail_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_ptg_hostedantisoftwareemail_1users_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'users_ptg_hostedantisoftwareemail_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'users_ptg_b1bdreemail_idb',
      ),
    ),
  ),
);