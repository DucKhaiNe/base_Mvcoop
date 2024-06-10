<?php

namespace Khaind\MvcOop\Models;

use Khaind\MvcOop\Commons\Model;

class Post extends Model
{
    protected string $tableName = 'posts';

    public function all()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.user_id',
                'p.tieu_de',
                'p.mo_ta',
                'p.hinh_anh',
                'p.luot_xem',
                'p.ngay_dang ',
                'p.ngay_sua ',
                'us.name as us_name',
                'us.email as us_email'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'users', 'us', 'us.id = p.users_id')
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();
    }

    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone ($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                'p.id',
                'p.user_id',
                'p.tieu_de',
                'p.mo_ta',
                'p.hinh_anh',
                'p.luot_xem',
                'p.ngay_dang ',
                'p.ngay_sua ',
                'us.name as us_name',
                'us.email as us_email'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'users', 'us', 'us.id = p.users_id')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.user_id',
                'p.tieu_de',
                'p.mo_ta',
                'p.hinh_anh',
                'p.noi_dung',
                'p.luot_xem',
                'p.ngay_dang ',
                'p.ngay_sua ',
                'us.name as us_name',
                'us.email as us_email'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'users', 'us', 'us.id = p.users_id')
            ->where('p.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}
