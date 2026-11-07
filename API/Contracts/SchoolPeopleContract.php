<?php

declare(strict_types=1);

namespace Plugins\SchoolPeople\API\Contracts;

/**
 * Published contract for `school.people`.
 *
 * Students, teachers, staff and families — profiles, photos, QR identity and the archive lifecycle.
 *
 * Legacy source : students/teachers/staff/families, profiles_*.php, avatar_helper.php, person_of_interest.php
 * Legacy tables : students, teachers, staff, families
 *
 * Consumers declare `"requires": ["school.people"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolPeopleContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
