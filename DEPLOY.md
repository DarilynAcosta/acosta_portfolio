# Vercel Deployment

This project deploys to Vercel as a PHP serverless function using the
`vercel-php` runtime (`vercel-php@0.7.4` / PHP 8.3), with requests routed to
`api/index.php`.

## Required environment variables (set in Vercel dashboard)

- `APP_KEY` — generate locally with `php artisan key:generate --show`
- `APP_URL` — your deployment URL, e.g. `https://acosta-portfolio.vercel.app`

Already configured in `vercel.json` (do not need to set manually):

- `APP_ENV=production`, `APP_DEBUG=false`
- `SESSION_DRIVER=cookie`, `CACHE_STORE=array`, `QUEUE_CONNECTION=sync`
- Writable paths redirected to `/tmp` (Vercel's filesystem is read-only)

## Why the previous deployment failed

The repo had no Vercel configuration, so Vercel auto-detected Vite and expected
a `dist/` output directory. Laravel builds to `public/build` and serves through
PHP, so the build failed. `vercel.json` now pins the framework to `null`, uses
the PHP runtime, and routes static assets plus all other requests correctly.

## Deploy

1. Push to the connected Git branch, or run `npx vercel --prod`.
2. Set `APP_KEY` and `APP_URL` in Vercel: Project → Settings → Environment Variables.
3. Redeploy.

## Notes

- The app uses no database; all content is defined in `routes/web.php`.
- Static assets live in `public/css`, `public/js`, and `public/images` and are
  served via explicit routes in `vercel.json`.
- Runtime logs: Vercel dashboard → Project → Logs / Functions tab.
