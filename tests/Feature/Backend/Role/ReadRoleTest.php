<?php

namespace Tests\Feature\Backend\Role;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadRoleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_the_role_index_page()
    {
        $this->loginAsAdmin();

        $this->get(route('admin.auth.role.index'))->assertStatus(200);
    }
}
