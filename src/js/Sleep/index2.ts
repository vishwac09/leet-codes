export async function sleep(millis: number): Promise<void> {
  return new Promise((res) => setTimeout(() => res(), millis));
}
