export async function sleep(millis: number): Promise<void> {
  const now = Date.now();
  while (Date.now() - now < millis) {
    // do nothing;
  }
  return;
}
