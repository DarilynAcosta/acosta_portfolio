# Vercel Deployment

This Laravel app deploys to Vercel as a PHP serverless function using the
community `vercel-php` runtime (`vercel-php@0.7.4` / PHP 8.3), with every
request routed to `api/index.php`.

## Vercel project settings

Set these in **Project -> Settings -> Build & Development**:

| Setting | Value |
| --- | --- |
| Framework Preset | **Other** |
| Root Directory | `./` |
| Install Command | `npm install` |
| Build Command | `npm run build` |
| Output Directory | `public` |

These are also declared in `vercel.json` (`framework: null`,
`installCommand`, `buildCommand`, `outputDirectory`), so a Git deployment uses
them automatically.

## Environment variables

Set in **Project -> Settings -> Environment Variables** (Production):

| Variable | Value |
| --- | --- |
| `APP_NAME` | `Darilyn Acosta Portfolio` |
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `APP_KEY` | output of `php artisan key:generate --show` |
| `APP_URL` | `https://acosta-portfolio.vercel.app` |

Already set by `vercel.json` and not required in the dashboard:

- `APP_STORAGE=/tmp/storage`, `LOG_CHANNEL=stderr`
- `SESSION_DRIVER=cookie`, `CACHE_STORE=array`, `QUEUE_CONNECTION=sync`
- `VIEW_COMPILED_PATH` and bootstrap cache paths under `/tmp`

Generate `APP_KEY` locally:

```bash
php artisan key:generate --show
```

Do not commit `.env` or the key.

## Deploy

```bash
vercel link            # link this directory to the acosta-portfolio project
vercel                 # preview deployment
vercel --prod          # production deployment
```

If the repository is connected to Vercel through Git, pushing to the production
branch triggers the same build.

## Notes

- No database is required; all content is defined in `routes/web.php`.
- No file uploads, queues, or persistent sessions are used.
- The site's CSS/JS live in `public/css` and `public/js` and are served by the
  explicit `/css/*` and `/js/*` routes. `npm run build` still compiles the Vite
  sources into `public/build`, which is served by the `/build/*` route.
- Writable runtime paths are redirected to `/tmp` because the rest of the Vercel
  filesystem is read-only.
- Runtime logs: Vercel dashboard -> Project -> Logs / Functions tab.
