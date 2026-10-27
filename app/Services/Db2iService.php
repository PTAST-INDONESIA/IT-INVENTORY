<?php

namespace App\Services;

use PDO;
use PDOException;

class Db2iService
{
    protected PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "odbc:" . env('AS400_DSN'),
                env('AXPGMR'),
                env('AXPGMR'),
                [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                ]
            );
        } catch (PDOException $e) {
            \Log::error('[DB2i][CONNECT]', [
                'message' => $e->getMessage()
            ]);

            abort(500, 'Koneksi DB2 i gagal');
        }
    }

    /**
     * SELECT tanpa parameter
     */
    public function select(string $sql): array
    {
        try {
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll();

        } catch (PDOException $e) {
            \Log::error('[DB2i][SELECT]', [
                'sql'     => $sql,
                'message' => $e->getMessage()
            ]);

            // untuk development bisa dd
            // dd($e->getMessage());

            abort(500, 'Query DB2 i gagal dijalankan');
        }
    }

    /**
     * SELECT dengan parameter
     */
    public function selectWithParams(string $sql, array $params = []): array
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();

        } catch (PDOException $e) {
            \Log::error('[DB2i][SELECT PARAM]', [
                'sql'     => $sql,
                'params' => $params,
                'message' => $e->getMessage()
            ]);

            abort(500, 'Query DB2 i gagal dijalankan');
        }
    }
}
