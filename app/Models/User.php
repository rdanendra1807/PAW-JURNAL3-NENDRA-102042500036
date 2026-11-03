<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    /** @use HasFactory<UserFactory> */
=======
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
<<<<<<< HEAD
=======
        'nomor_induk',
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
=======

    public function isAdmin(): bool
    {
        // Peran admin telah dihapus dari sistem
        return false;
    }

    public function isDosen(): bool
    {
        return $this->role === 'dosen';
    }

    public function isMahasiswa(): bool
    {
        return $this->role === 'mahasiswa';
    }

    /**
     * Mata kuliah yang diampu oleh dosen ini.
     */
    public function taughtCourses(): HasMany
    {
        return $this->hasMany(MataKuliah::class, 'dosen_id');
    }

    /**
     * Mata kuliah yang diikuti oleh mahasiswa ini (hanya yang sudah disetujui / approved).
     */
    public function enrolledCourses(): BelongsToMany
    {
        return $this->belongsToMany(MataKuliah::class, 'course_user', 'user_id', 'course_id')
            ->where('course_user.status', 'approved')
            ->withPivot('status')
            ->withTimestamps();
    }

    /**
     * Seluruh mata kuliah yang pernah diajukan oleh mahasiswa ini (termasuk pending & rejected).
     */
    public function allCourseEnrollments(): BelongsToMany
    {
        return $this->belongsToMany(MataKuliah::class, 'course_user', 'user_id', 'course_id')
            ->withPivot('status')
            ->withTimestamps();
    }

    /**
     * Pengumpulan jawaban tugas oleh mahasiswa ini.
     */
    public function submissions(): HasMany
    {
        return $this->hasMany(Submission::class);
    }
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
}
