# hkm-plugin-school-people

> Solves **`school.people`** · namespace **`Plugins\SchoolPeople\`** · on-demand GDA module
> Family: Elimu / school domain

Students, teachers, staff and families — profiles, photos, QR identity and the archive lifecycle.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolPeopleContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `students/teachers/staff/families, profiles_*.php, avatar_helper.php, person_of_interest.php` |
| Legacy tables | `students, teachers, staff, families` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `storage.local`
- `image.processing`
- `school.directory`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.people"] }
```

```php
$svc = $container->make(\Plugins\SchoolPeople\API\Contracts\SchoolPeopleContract::class);
```

## Installing

```bash
hkm plugins enable SchoolPeople <project>
```
