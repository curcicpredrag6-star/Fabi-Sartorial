# SARTORIAL — improved starter for Spain

This is an improved working base, NOT a legally approved or payment-ready online shop.

## Included
- Existing HTML/CSS/JS starter retained.
- Three supplied Adapted Line campaign images copied into `assets/`.
- Adapted Line editorial section and navigation link added.
- Existing form remains a request form and does not collect payment.
- Google Apps Script is not activated until a real endpoint is configured.

## Confirmed product direction
- Sales market: Spain.
- Collections: Ready to Wear, Made to Measure (MTM), Adapted Line.
- Men's and women's models.
- Adapted Line is a collection for specific needs; do not invent technical/medical claims.
- Measurements only; no diagnoses, medical documents or body photos.
- Initials up to 3; customer chooses from a supplied design gallery; custom drawing +€10 (confirm before publishing).
- Three Adapted Line campaign images are in `assets/`.

## Not yet confirmed — do not invent
Seller legal name/form, NIF/CIF, registered address, official email, domain, collection prices, shipping prices/destinations, delivery commitments, return address, final Adapted Line features, drawing gallery, valid measurement video, payment account and verified backend.

## Hostinger deployment
1. Keep GitHub as the code/source repository.
2. In Hostinger: Websites → Manage site → Advanced → Git (or Import site → Deploy from GitHub, if available on your plan).
3. Connect GitHub, select the repository and `main` branch.
4. Set the deployment root to the directory containing `index.html`.
5. Deploy to a compatible web-hosting plan and connect the chosen domain.
6. Test HTTPS, images, mobile layout, navigation and form before public launch.

Hostinger documents Git deployment for custom HTML/PHP websites on supported web/cloud plans. Verify availability in your account.

## Mandatory launch gates
- Identify/register the seller and obtain correct Spanish legal/tax details.
- Have Spanish e-commerce/privacy counsel review Privacy Policy, Cookie Policy, Legal Notice, Terms, shipping/returns and withdrawal wording.
- Implement a real cookie-consent manager; reject non-essential cookies as easily as accept; block optional trackers before consent.
- Add GDPR notices, retention schedule, rights-request workflow, processor agreements and security controls.
- Confirm all prices, taxes, delivery costs and product details.
- Implement secure backend validation, spam protection, durable order storage and confirmation emails.
- If using Stripe, create Checkout Sessions server-side and verify signed webhooks. A browser redirect is not proof of payment.
- Test successful, failed, duplicate and abandoned orders; desktop and mobile.
- Set up backups, updates, monitoring and domain email.

Do not accept real customer measurements or payments until backend, privacy information and operational processes have been reviewed and tested.
