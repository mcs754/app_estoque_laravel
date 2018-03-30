<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Sabão', 12, 3.5, '2018-11-01'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Amaciante', 20, 11, '2018-10-04'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Creme Dental', 100, 1, '2018-05-01'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Sabão Líquido', 50, 3, '2018-04-03'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Farinha', 70, 8, '2018-06-10'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Sabonete', 80, 11, '2018-11-09'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Óleo de soja', 30, 6, '2018-03-30'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Goiabada', 25, 7, '2018-07-08'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Arroz', 5, 8, '2018-11-03'));
       DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array ('Jiló', 99, 2, '2018-11-03'));

    }
}

